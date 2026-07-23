<style>
    body {
        opacity: 0;
        transform: translateY(15px);
        transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    body.page-loaded {
        opacity: 1;
        transform: none;
    }
    body.page-leaving {
        opacity: 0;
        transform: translateY(-15px);
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        requestAnimationFrame(() => {
            document.body.classList.add("page-loaded");
        });

        // Scroll Reveal Observer
        const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -40px 0px" };
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll(".reveal").forEach(el => revealObserver.observe(el));
    });

    window.addEventListener("pageshow", (event) => {
        if (event.persisted) {
            document.body.classList.remove("page-leaving");
            document.body.classList.add("page-loaded");
        }
    });

    document.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", function(e) {
            const href = this.getAttribute("href");
            
            // Allow default behavior for external links, anchor links, or empty hrefs
            if (!href || href.startsWith("#") || (href.startsWith("http") && !href.includes(window.location.host))) {
                return;
            }
            
            // Allow default for new tabs
            if (this.target === "_blank") return;
            
            e.preventDefault();
            document.body.classList.remove("page-loaded");
            document.body.classList.add("page-leaving");
            
            setTimeout(() => {
                window.location.href = this.href;
            }, 350);
        });
    });
</script>
