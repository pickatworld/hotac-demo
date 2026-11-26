document.addEventListener("DOMContentLoaded", function () {
    var profiles = {
        fabas: {
            name: "الشركة التجارية للأخشاب (فاباس)",
            icon: "fa-tree",
            overview: "شركة مساهمة مصرية تعمل في تجارة الأخشاب وتصنيع المشغولات الخشبية، إلى جانب التخزين وتأجير المعدات والاستثمار العقاري.",
            ownership: "100% للشركة القابضة للسياحة والفنادق",
            capital: "57.5 مليون جنيه",
            activity: "استيراد وتجارة الأخشاب، تصنيع المشغولات الخشبية، خدمات التخزين وتأجير المعدات، تجارة مواد البناء والمقاولات، والاستثمار العقاري.",
            facts: ["رأس المال المرخص به: 100 مليون جنيه", "عدد الأسهم: 11.5 مليون سهم", "القيمة الاسمية للسهم: 5 جنيهات"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "319,237", "609,758", "918,881"],
                ["صافي الأرباح / الخسائر", "35,940", "145,591", "100,304"],
                ["صافي حقوق الملكية", "170,333", "238,706", "338,804"],
                ["عدد العاملين", "192", "162", "150"]
            ],
            document: "الشركة التجارية للأخشاب فاباس.docx"
        },
        mamoura: {
            name: "شركة المعمورة للتعمير والتنمية السياحية",
            icon: "fa-umbrella-beach",
            overview: "تعمل في تطوير الأراضي وتزويدها بالمرافق، وإنشاء المشروعات السياحية واستغلالها وإدارتها.",
            ownership: "100% للشركة القابضة للسياحة والفنادق",
            capital: "250 مليون جنيه",
            established: "1964",
            activity: "اقتناء الأراضي وتزويدها بالمرافق والخدمات والتصرف فيها، وتأجير واستثمار الأراضي الزراعية، وتطوير المشروعات السياحية والعقارية.",
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "295,969", "338,936", "377,157"],
                ["صافي الأرباح / الخسائر", "83,813", "113,403", "153,370"],
                ["صافي حقوق الملكية", "294,470", "316,767", "554,318"],
                ["عدد العاملين", "1,091", "1,058", "1,006"]
            ],
            document: "شركة المعمورة.docx"
        },
        egoth: {
            name: "الشركة المصرية العامة للسياحة والفنادق (إيجوث)",
            icon: "fa-hotel",
            overview: "تمتلك فنادق وأراضي سياحية في عدد من المحافظات، وتساهم في شركات تعمل في السياحة والفنادق والتنمية السياحية.",
            ownership: "100% للشركة القابضة للسياحة والفنادق",
            capital: "3 مليارات جنيه",
            established: "14 مارس 1976",
            activity: "تنمية المناطق السياحية، إنشاء وإدارة المنشآت الفندقية والسياحية، تشغيل المراسي، التدريب الفندقي، وتنظيم الرحلات والخدمات السياحية.",
            assets: ["فندق الكونتيننتال", "فندق كليوباترا", "ريتاك نفرتاري أبو سمبل", "ريتاك كوناى دهب", "فندق شتايجنبرجر اللسان"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "2,653,979", "125,046", "1,226,367"],
                ["صافي الأرباح / الخسائر", "1,811,600", "2,179,259", "2,713,828"],
                ["صافي حقوق الملكية", "3,865,947", "4,368,030", "5,924,207"],
                ["عدد العاملين", "1,254", "1,205", "1,085"]
            ],
            document: "شركة ايجوث.docx"
        },
        manufactures: {
            name: "شركة صيدناوي وبيع المصنوعات",
            icon: "fa-store",
            overview: "تأسست عام 1932، وتعمل في تجارة السلع الاستهلاكية والأقمشة والمفروشات وغيرها من المنتجات، عبر فروع ومخازن في أنحاء الجمهورية.",
            ownership: "100% للشركة القابضة للسياحة والفنادق",
            capital: "143.475 مليون جنيه",
            established: "1932",
            activity: "تجارة الملابس والأقمشة والمفروشات والأدوات المنزلية والأجهزة والأثاث، وإدارة الفروع والمشاركة في أنشطة البيع والتسويق والاستثمار العقاري.",
            facts: ["206 فروع وفق الملف التعريفي"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "197,268", "224,261", "210,345"],
                ["صافي الأرباح / الخسائر", "16,299", "22,770", "10,629"],
                ["صافي حقوق الملكية", "(30,894)", "(7,294)", "79,776"],
                ["عدد العاملين", "1,479", "1,299", "1,090"]
            ],
            document: "شركة بيع المصنوعات المصرية.docx"
        },
        fashion: {
            name: "شركة بيوت الأزياء الراقية (هانو – بنزايون)",
            icon: "fa-shirt",
            overview: "شركة تجارية وصناعية تأسست عام 1968، وتعمل في تجارة الملابس والأقمشة والأدوات المنزلية والأثاث، وتصنيع الأثاث الخشبي.",
            ownership: "مملوكة بالكامل للشركة القابضة للسياحة والفنادق",
            capital: "107 ملايين جنيه",
            established: "1968",
            activity: "تجارة الأقمشة والملابس الجاهزة والأدوات المنزلية والسلع المعمرة والأثاث، وتصنيع الأثاث الخشبي.",
            facts: ["58 فرعاً و13 مخزناً وفق الملف التعريفي"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "262,326", "265,972", "261,612"],
                ["صافي الأرباح / الخسائر", "24,784", "8,515", "9,829"],
                ["صافي حقوق الملكية", "69,479", "76,232", "127,748"],
                ["عدد العاملين", "1,479", "1,373", "1,308"]
            ],
            document: "شركة بيوت الأزياء الراقية.docx"
        },
        "omar-effendi": {
            name: "شركة عمر أفندي",
            icon: "fa-shop",
            overview: "سلسلة متاجر مصرية تأسست عام 1856، وتعمل في تجارة التجزئة عبر فروع ومخازن منتشرة في أنحاء الجمهورية.",
            ownership: "100% للشركة القابضة للسياحة والفنادق",
            capital: "100 مليون جنيه",
            established: "1856",
            activity: "تجارة الملابس والأحذية والمنتجات الجلدية والسلع المنزلية والغذائية وغيرها من المنتجات.",
            facts: ["82 فرعاً و68 مخزناً وفق الملف التعريفي"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "146,171", "128,726", "غير متاح"],
                ["صافي الأرباح / الخسائر", "(52,755)", "89,089", "8,270"],
                ["صافي حقوق الملكية", "(556,021)", "(466,932)", "(408,010)"],
                ["رأس المال العامل", "(582,716)", "(490,923)", "(449,727)"]
            ],
            document: "شركة عمر أفندى.docx"
        },
        "misr-tourism": {
            name: "شركة مصر للسياحة",
            icon: "fa-plane",
            overview: "تأسست عام 1934، وتقدم خدمات السفر والسياحة والنقل والضيافة، وتمتلك فنادق ومطاعم عائمة وتساهم في مشروعات مشتركة.",
            ownership: "99.85% وفق بيانات الملكية الواردة في الملف التعريفي",
            capital: "125.765 مليون جنيه",
            established: "1934",
            activity: "تنظيم الرحلات، خدمات السفر والنقل، إنشاء وإدارة الفنادق والقرى السياحية، إدارة المراسي، والوكالات والخدمات السياحية.",
            assets: ["فندق رومانس الإسكندرية", "فندق بورسعيد", "المطاعم العائمة أونيكس وتوباز وتركواز", "مطعم وكافتيريا نجيب محفوظ"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "1,037,041", "1,421,148", "1,900,656"],
                ["صافي الأرباح / الخسائر", "80,808", "125,829", "145,975"],
                ["صافي حقوق الملكية", "129,181", "248,434", "313,679"],
                ["عدد العاملين", "1,720", "1,770", "1,770"]
            ],
            document: "شركة مصر للسياحة.docx"
        },
        "sound-light": {
            name: "شركة مصر للصوت والضوء والتنمية السياحية",
            icon: "fa-lightbulb",
            overview: "تأسست عام 1980 لتقديم عروض الصوت والضوء وتنفيذ مشروعات الإضاءة والخدمات السياحية في المواقع الأثرية.",
            ownership: "100% للشركة القابضة للسياحة والفنادق",
            capital: "54 مليون جنيه",
            established: "1980",
            activity: "إدارة وتشغيل عروض الصوت والضوء في المواقع الأثرية، وتطوير المشروعات السياحية والخدمات المرتبطة بها.",
            assets: ["أهرامات الجيزة", "معبد الكرنك بالأقصر", "معابد فيلة وأبو سمبل وإدفو بأسوان"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "98,872", "101,056", "144,156"],
                ["صافي الأرباح / الخسائر", "43,226", "50,955", "55,888"],
                ["صافي حقوق الملكية", "55,460", "90,357", "236,123"],
                ["عدد العاملين", "399", "380", "غير متاح"]
            ],
            document: "شركة مصر للصوت والضوء والتنمية السياحية.docx"
        },
        "misr-hotels": {
            name: "شركة مصر للفنادق",
            icon: "fa-bed",
            overview: "تعمل في الأنشطة السياحية والفندقية منذ عام 1955، وتمتلك فندقي النيل ريتز-كارلتون وسفير دهب وتساهم في شركات مشتركة.",
            ownership: "50.696% للشركة القابضة للسياحة والفنادق",
            capital: "396 مليون جنيه",
            established: "1955",
            activity: "إنشاء وشراء وإدارة الفنادق والمنتجعات والمطاعم، وتطوير وإدارة الأنشطة السياحية والعمرانية.",
            assets: ["فندق النيل ريتز-كارلتون بالقاهرة", "فندق سفير دهب"],
            years: ["2022/2023", "2023/2024", "2024/2025"],
            metrics: [
                ["إيرادات النشاط الجاري", "975,986", "1,438,089", "1,906,639"],
                ["صافي الأرباح / الخسائر", "819,760", "1,454,240", "1,389,393"],
                ["صافي حقوق الملكية", "1,058,077", "1,971,792", "2,751,570"],
                ["عدد العاملين", "87", "87", "87"]
            ],
            document: "مصر للفنادق.docx"
        }
    };

    var profilesContainer = document.querySelector("[data-company-profile]");
    if (!profilesContainer) {
        return;
    }

    var profile = profiles[profilesContainer.getAttribute("data-company-profile")];
    if (!profile) {
        profilesContainer.textContent = "تعذر العثور على بيانات الشركة المطلوبة.";
        return;
    }

    document.title = profile.name + " | HOTAC";

    var createElement = function (tag, className, text) {
        var element = document.createElement(tag);
        if (className) {
            element.className = className;
        }
        if (text) {
            element.textContent = text;
        }
        return element;
    };

    var hero = createElement("header", "subsidiary-profile-hero");
    hero.appendChild(createElement("span", "investment-icon", ""));
    hero.querySelector(".investment-icon").innerHTML = '<i class="fa-solid ' + profile.icon + '" aria-hidden="true"></i>';
    hero.appendChild(createElement("h1", "", profile.name));
    hero.appendChild(createElement("p", "", profile.overview));
    profilesContainer.appendChild(hero);

    var facts = createElement("div", "subsidiary-facts");
    [
        ["الملكية", profile.ownership],
        ["رأس المال", profile.capital],
        ["تاريخ التأسيس", profile.established || "غير موضح في الملف"]
    ].forEach(function (fact) {
        var item = createElement("article", "subsidiary-fact");
        item.appendChild(createElement("span", "", fact[0]));
        item.appendChild(createElement("strong", "", fact[1]));
        facts.appendChild(item);
    });
    profilesContainer.appendChild(facts);

    var activity = createElement("section", "subsidiary-info-card");
    activity.appendChild(createElement("h2", "", "النشاط الرئيسي"));
    activity.appendChild(createElement("p", "", profile.activity));
    profilesContainer.appendChild(activity);

    if (profile.assets && profile.assets.length) {
        var assets = createElement("section", "subsidiary-info-card");
        assets.appendChild(createElement("h2", "", "أبرز الأصول والمواقع"));
        var assetList = createElement("ul", "subsidiary-asset-list");
        profile.assets.forEach(function (asset) {
            assetList.appendChild(createElement("li", "", asset));
        });
        assets.appendChild(assetList);
        profilesContainer.appendChild(assets);
    }

    if (profile.facts && profile.facts.length) {
        var additionalFacts = createElement("section", "subsidiary-info-card");
        additionalFacts.appendChild(createElement("h2", "", "معلومات إضافية"));
        var factsList = createElement("ul", "subsidiary-asset-list");
        profile.facts.forEach(function (fact) {
            factsList.appendChild(createElement("li", "", fact));
        });
        additionalFacts.appendChild(factsList);
        profilesContainer.appendChild(additionalFacts);
    }

    var financial = createElement("section", "subsidiary-info-card");
    financial.appendChild(createElement("h2", "", "مؤشرات مالية مختارة"));
    financial.appendChild(createElement("p", "subsidiary-data-note", "القيم المالية بالألف جنيه، كما وردت في الملف التعريفي."));
    var tableWrap = createElement("div", "table-responsive");
    var table = createElement("table", "table table-striped subsidiary-financial-table");
    var tableHead = createElement("thead", "");
    var headerRow = createElement("tr", "");
    ["المؤشر"].concat(profile.years).forEach(function (heading) {
        headerRow.appendChild(createElement("th", "", heading));
    });
    tableHead.appendChild(headerRow);
    table.appendChild(tableHead);
    var tableBody = createElement("tbody", "");
    profile.metrics.forEach(function (metric) {
        var row = createElement("tr", "");
        metric.forEach(function (value, index) {
            row.appendChild(createElement(index === 0 ? "th" : "td", "", value));
        });
        tableBody.appendChild(row);
    });
    table.appendChild(tableBody);
    tableWrap.appendChild(table);
    financial.appendChild(tableWrap);
    profilesContainer.appendChild(financial);

    var source = document.createElement("a");
    source.className = "btn btn-gold subsidiary-source-link";
    source.href = "../data-hotac/الشركات التابعة/" + profile.document;
    source.setAttribute("download", "");
    source.textContent = "تحميل الملف التعريفي الكامل";
    profilesContainer.appendChild(source);
});
