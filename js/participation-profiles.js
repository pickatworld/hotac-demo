document.addEventListener("DOMContentLoaded", function () {
    var profiles = {
        holding: {
            name: "الشركة القابضة للسياحة والفنادق",
            image: "holding.jpg",
            description: "تستثمر الشركة في صناديق التمويل والتنمية والاستثمار العقاري والسياحي، وتشارك مع إيجوث ومصر للسياحة في هوتاك للتنمية السياحية والعقارية.",
            contacts: [
                ["رئيس مجلس الإدارة", "ماجد المنشاوي"],
                ["العضو المنتدب التنفيذي", "عمرو عطية"],
                ["العنوان", "4 شارع أمريكا اللاتينية، جاردن سيتي، القاهرة"],
                ["الهاتف", "+20 2 27940036"],
                ["البريد الإلكتروني", "info@hotac.com.eg"]
            ]
        },
        egoth: {
            name: "الشركة المصرية العامة للسياحة والفنادق (إيجوث)",
            image: "egoth.jpg",
            description: "تضم مساهمات إيجوث شركات تعمل في الصرافة والفنادق والتنمية السياحية وإدارة المراسي والمنتجعات.",
            contacts: [
                ["رئيس مجلس الإدارة", "حمدي محمد رشاد عبد العزيز"],
                ["العضو المنتدب التنفيذي", "شريف صلاح الدين بنداري"],
                ["العنوان", "4 شارع أمريكا اللاتينية، جاردن سيتي، القاهرة"],
                ["الهاتف", "24825635 – 27927402"],
                ["البريد الإلكتروني", "info@egoth.com.eg"],
                ["الموقع الإلكتروني", "www.egoth.com.eg"]
            ]
        },
        "misr-hotels": {
            name: "شركة مصر للفنادق",
            image: "misr-hotels.jpg",
            description: "تستثمر الشركة في شركات سياحية وفندقية ومشروعات في الغردقة وشرم الشيخ وجنوب سيناء والواحات.",
            contacts: [
                ["رئيس مجلس الإدارة", "حسين رضوان إبراهيم رضوان"],
                ["العضو المنتدب التنفيذي", "عبد العزيز عيد"],
                ["العنوان", "28 شارع حسين واصفي، الدقي، الجيزة"],
                ["الهاتف", "23911227"],
                ["البريد الإلكتروني", "info@misrhotels.com.eg"],
                ["الموقع الإلكتروني", "www.misrhotels.com.eg"]
            ]
        },
        "misr-tourism": {
            name: "شركة مصر للسياحة",
            image: "misr-tourism.jpg",
            description: "تساهم الشركة في شركة مصر سيناء للسياحة، التي تشمل أصولها فنادق وقرى سياحية في جنوب سيناء وطابا ورأس سدر.",
            contacts: [
                ["رئيس مجلس الإدارة", "عبد الفتاح صفوت"],
                ["العضو المنتدب التنفيذي", "أحمد طه العسقلاني"],
                ["العنوان", "برج مصر للسياحة، ميدان العباسية، و1 شارع طلعت حرب، القاهرة"],
                ["الهاتف", "24825635 – 27927402"],
                ["البريد الإلكتروني", "tourism@misrtravel.net"],
                ["الموقع الإلكتروني", "misrtravelco.net"]
            ]
        },
        "sound-light": {
            name: "شركة مصر للصوت والضوء والتنمية السياحية",
            image: "sound-light.jpg",
            description: "تعرض صفحة الشركة الرسمية بياناتها التعريفية والتواصلية، ولا تتضمن قائمة تفصيلية بمساهمات في شركات مشتركة.",
            contacts: [
                ["رئيس مجلس الإدارة", "وعد الله محمد أبو العلا"],
                ["العضو المنتدب التنفيذي", "محمد عبد العزيز جودة السيد"],
                ["العنوان", "ميدان أبو الهول، نزلة السمان، الهرم، الجيزة"],
                ["الهاتف", "33857320 – 33852880 – 35876734"],
                ["البريد الإلكتروني", "info@soundandlight.com.eg"],
                ["الموقع الإلكتروني", "www.soundandlight.com.eg"]
            ]
        },
        mamoura: {
            name: "شركة المعمورة للتعمير والتنمية السياحية",
            image: "mamoura.jpg",
            description: "تساهم الشركة في شركة زهراء المعادي للاستثمار والتعمير، وتغطي أنشطتها مجالات التعمير والتنمية العقارية والإسكان والسياحة.",
            contacts: [
                ["رئيس مجلس الإدارة", "عمرو أحمد يوسف سيد"],
                ["العضو المنتدب التنفيذي", "سالم جابر سالم سيد"],
                ["العنوان", "8 شارع مصطفى كامل، سموحة، الإسكندرية"],
                ["الهاتف", "034284253"],
                ["البريد الإلكتروني", "info@elmaamoura.com"],
                ["الموقع الإلكتروني", "www.elmaamoura.com"]
            ]
        },
        "joint-hotels": {
            name: "فنادق الشركات المشتركة",
            description: "مجموعة من الفنادق والمنتجعات الواردة ضمن مشروعات الشركات المشتركة.",
            gallery: [
                ["joint-hotel-1.jpg", "فندق من مشروعات الشركات المشتركة"],
                ["joint-hotel-2.jpg", "منشأة فندقية تابعة لمشروعات مشتركة"],
                ["joint-hotel-3.jpg", "فندق سياحي من أصول الشركات المشتركة"]
            ]
        }
    };

    var main = document.querySelector("[data-participation-profile]");
    if (!main) {
        return;
    }

    var profile = profiles[main.getAttribute("data-participation-profile")];
    if (!profile) {
        main.prepend(document.createTextNode("تعذر العثور على بيانات الشركة المطلوبة."));
        return;
    }

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

    var intro = createElement("section", "participation-company-intro");
    var identity = createElement("div", "participation-company-identity");

    if (profile.image) {
        var image = document.createElement("img");
        image.className = "participation-company-logo";
        image.src = "../img/img-hotac/participations/" + profile.image;
        image.alt = "شعار " + profile.name;
        image.loading = "lazy";
        identity.appendChild(image);
    }

    var identityText = createElement("div", "participation-company-copy");
    identityText.appendChild(createElement("span", "section-badge", "الشركات المشاركة"));
    identityText.appendChild(createElement("h1", "", profile.name));
    identityText.appendChild(createElement("p", "", profile.description));
    identity.appendChild(identityText);
    intro.appendChild(identity);

    if (profile.contacts && profile.contacts.length) {
        var contactCard = createElement("section", "participation-contact-card");
        contactCard.appendChild(createElement("h2", "", "بيانات التواصل"));
        var tableWrapper = createElement("div", "table-responsive");
        var table = createElement("table", "table table-bordered participation-contact-table");
        var body = createElement("tbody", "");

        profile.contacts.forEach(function (contact) {
            var row = createElement("tr", "");
            row.appendChild(createElement("th", "", contact[0]));
            var valueCell = createElement("td", "");
            var value = contact[1];
            var link;
            if (value.indexOf("@") !== -1) {
                link = document.createElement("a");
                link.href = "mailto:" + value;
            } else if (value.indexOf("www.") === 0 || value.indexOf("misrtravelco.net") === 0) {
                link = document.createElement("a");
                link.href = "https://" + value;
                link.target = "_blank";
                link.rel = "noopener noreferrer";
            }
            if (link) {
                link.textContent = value;
                valueCell.appendChild(link);
            } else {
                valueCell.textContent = value;
            }
            row.appendChild(valueCell);
            body.appendChild(row);
        });

        table.appendChild(body);
        tableWrapper.appendChild(table);
        contactCard.appendChild(tableWrapper);
        intro.appendChild(contactCard);
    }

    if (profile.gallery && profile.gallery.length) {
        var gallery = createElement("div", "participation-photo-gallery");
        profile.gallery.forEach(function (photo) {
            var figure = createElement("figure", "");
            var image = document.createElement("img");
            image.src = "../img/img-hotac/participations/" + photo[0];
            image.alt = photo[1];
            image.loading = "lazy";
            figure.appendChild(image);
            gallery.appendChild(figure);
        });
        intro.appendChild(gallery);
    }

    main.insertBefore(intro, main.firstChild);
});
