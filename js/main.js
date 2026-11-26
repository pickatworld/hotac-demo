document.addEventListener("DOMContentLoaded", function () {
    var currentPage = window.location.pathname.split("/").pop() || "index.html";
    var currentHash = window.location.hash.slice(1);
    var homeNav = document.querySelector(".home-navbar");
    var homeMenu = document.getElementById("navbarCollapse");

    var matchesCurrentPage = function (link) {
        var href = link.getAttribute("href") || "";
        var linkParts = href.split("#");
        var linkPage = linkParts[0];
        var linkHash = linkParts[1] || "";
        return linkPage === currentPage && (
            !linkHash ||
            linkHash === currentHash ||
            (currentPage === "index.html" && !currentHash && linkHash === "home")
        );
    };

    document.querySelectorAll(".navbar-nav a[href]").forEach(function (link) {
        if (matchesCurrentPage(link)) {
            link.classList.add("active");
            link.setAttribute("aria-current", "page");
            var parentDropdown = link.closest(".dropdown");
            var dropdownToggle = parentDropdown && parentDropdown.querySelector(".dropdown-toggle");
            if (dropdownToggle) {
                dropdownToggle.classList.add("active");
                dropdownToggle.setAttribute("aria-current", "page");
            }
        }
    });

    var hasDirectPageLink = Array.from(document.querySelectorAll(".navbar-nav > .nav-item > .nav-link[href]")).some(function (link) {
        var linkParts = (link.getAttribute("href") || "").split("#");
        return linkParts[0] === currentPage && !linkParts[1];
    });

    if (!currentHash && !hasDirectPageLink) {
        document.querySelectorAll(".navbar-nav .dropdown").forEach(function (dropdown) {
            var hasCurrentPageSection = Array.from(dropdown.querySelectorAll(".dropdown-menu a[href]")).some(function (link) {
                return (link.getAttribute("href") || "").split("#")[0] === currentPage;
            });
            var toggle = dropdown.querySelector(".dropdown-toggle");
            if (hasCurrentPageSection && toggle) {
                toggle.classList.add("active");
                toggle.setAttribute("aria-current", "page");
            }
        });
    }

    document.querySelectorAll("[data-current-year]").forEach(function (element) {
        element.textContent = new Date().getFullYear();
    });

    document.querySelectorAll("[data-demo-form]").forEach(function (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            var notice = form.querySelector("[data-form-notice]");
            if (notice) {
                notice.textContent = "هذه واجهة تجريبية ولا يتم إرسال البيانات. للتواصل الفعلي، استخدم البريد الإلكتروني الموضح.";
            }
        });
    });

    if (homeNav && homeMenu) {
        var updateHomeNav = function () {
            homeNav.classList.toggle("is-scrolled", window.scrollY > 50);
        };

        homeMenu.addEventListener("show.bs.collapse", function () {
            homeNav.classList.add("menu-open");
        });
        homeMenu.addEventListener("hide.bs.collapse", function () {
            homeNav.classList.remove("menu-open");
        });
        window.addEventListener("scroll", updateHomeNav, { passive: true });
        updateHomeNav();
    }

    document.querySelectorAll(".navbar-nav a").forEach(function (link) {
        link.addEventListener("click", function () {
            var menu = link.closest(".navbar-collapse");
            if (
                menu &&
                menu.classList.contains("show") &&
                !link.classList.contains("dropdown-toggle") &&
                window.bootstrap
            ) {
                window.bootstrap.Collapse.getOrCreateInstance(menu).hide();
            }
        });
    });
});
