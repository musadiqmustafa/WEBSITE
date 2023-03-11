function load_info() {
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "info" },
        success: function (data) {
            data = JSON.parse(data);
            let contact_number = document.getElementById("contact_number");
            contact_number.href = "tel:" + data[0].contact_number;
            contact_number.innerHTML = data[0].contact_number;
            let facebook = document.getElementById("facebook");
            facebook.href = "https://" + data[0].facebook;
            let twitter = document.getElementById("twitter");
            twitter.href = "https://" + data[0].twitter;
            let instagram = document.getElementById("instagram");
            instagram.href = "https://" + data[0].instagram;
            let linkdin = document.getElementById("linkdin");
            linkdin.href = "https://" + data[0].linkdin;
            let footer_info = document.getElementById("footer_info");
            footer_info.innerHTML = data[0].footer_description;
            let footer_contact_number = document.getElementById("footer_contact_number");
            footer_contact_number.href = "tel:" + data[0].contact_number;
            footer_contact_number.innerHTML = data[0].contact_number;
            let uk_footer_contact_number = document.getElementById("uk_footer_contact_number");
            uk_footer_contact.href = "tel:" + data[0].contact;
            uk_footer_contact.innerHTML = data[0].uk_contact;

        }
    });
}

function load_home_page() {
    load_info();
    brands();
    var banner = $(".banner-sub-slider").data('owl.carousel');
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "home" },
        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            let home_title = document.getElementById("home_title");
            home_title.innerHTML = data[0].home_title;
            let home_description = document.getElementById("home_description");
            home_description.innerHTML = data[0].home_description;
            let home_img = document.getElementById("home_img");
            home_img.src = "admin/"+(data[0].home_img).slice(3);
            let satisfied_clients = document.getElementsByClassName("satisfied_clients");
            for (let i = 0; i < satisfied_clients.length; i++) {
                satisfied_clients[i].innerHTML = data[0].satisfied_clients;
            }
            let projects_completed = document.getElementsByClassName("projects_completed");
            for (let i = 0; i < projects_completed.length; i++) {
                projects_completed[i].innerHTML = data[0].projects_completed;
            }
            let country_worldwide = document.getElementsByClassName("country_worldwide");
            for (let i = 0; i < country_worldwide.length; i++) {
                country_worldwide[i].innerHTML = data[0].country_worldwide;
            }
            contact_title.innerHTML = data[0].contact_title;
            let contact_description = document.getElementById("contact_description");
            contact_description.innerHTML = data[0].contact_description;
            $('.theClassName').css('background-image', 'url(' + data[0].home_img + ')');
            banner.refresh();

        }
    });
}

function load_about_page() {
    load_info();
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "about" },
        success: function (data) {
            data = JSON.parse(data);
            let about_title = document.getElementById("about_title");
            about_title.innerHTML = data[0].about_title;
            let about_description = document.getElementById("about_description");
            about_description.innerHTML = data[0].about_description;
            let about_img = document.getElementById("about_img");
            about_img.src = "admin/"+(data[0].about_img).slice(3);
            let about_img_title = document.getElementById("about_img_title");
            about_img_title.innerHTML = data[0].about_img_title;
            let about_content = document.getElementById("about_content");
            about_content.innerHTML = data[0].about_content;
            qualities();
        }
    });
}

function load_portfolio_page() {
    load_info();
    portfolio_sites();
    reviews();
    brands();
}

function load_contact_page() {
    load_info();
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "info" },
        success: function (data) {
            data = JSON.parse(data);
            let contact_number = document.getElementById("c_contact_number");
            console.log(contact_number);
            contact_number.href = "tel:" + data[0].contact_number;
            contact_number.innerHTML = data[0].contact_number;
            let address = document.getElementById("address");
            address.innerHTML = data[0].address;
            let email = document.getElementById("email");
            email.href = "mailto:" + data[0].email;
            email.innerHTML = data[0].email;
            let uk_contact= document.getElementById("uk_contact");
            uk_contact.innerHTML = data[0].uk_contact;
            let uk_address = document.getElementById("uk_address");
            uk_address.innerHTML = data[0].uk_address;

        }
    });
}

function qualities() {
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "qualities" },
        success: function (data) {
            data = JSON.parse(data);
            let qualities = document.getElementById("qualities");
            flag = true;
            for (i = 0; i < data.length; i++) {
                if (i == 0) {
                    var div = document.createElement("div");
                    div.className = "col-lg-6 col-md-6";
                    var ul = document.createElement("ul");
                    ul.className = "about-list text-start";
                    div.appendChild(ul);
                    qualities.appendChild(div);
                } else if (i >= (data.length / 2) && flag) {
                    var div2 = document.createElement("div");
                    div2.className = "col-lg-6 col-md-6";
                    var ul2 = document.createElement("ul");
                    ul2.className = "about-list about-list-2 text-start";
                    div2.appendChild(ul2);
                    qualities.appendChild(div2);
                    flag = false;
                }
                if (i < (data.length / 2)) {
                    let li = document.createElement("li");
                    let i1 = document.createElement("i");
                    i1.className = "bx bxs-check-circle";
                    li.appendChild(i1);
                    li.innerHTML += data[i];
                    ul.appendChild(li);
                } else {
                    let li2 = document.createElement("li");
                    let i2 = document.createElement("i");
                    i2.className = "bx bxs-check-circle";
                    li2.appendChild(i2);
                    li2.innerHTML += data[i];
                    ul2.appendChild(li2);
                }
            }
        }
    })
}

function brands() {
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "brands" },
        success: function (data) {
            data = JSON.parse(data);
            var brands = $(".brand-slider").data('owl.carousel');
            for (let i = 0; i < data.length; i++) {
                let div = document.createElement("div");
                div.className = "brand-item";
                let img = document.createElement("img");
                img.src = "admin/"+(data[i]).slice(3);
                img.alt = "Images";
                div.appendChild(img);
                brands.add(div);
                brands.refresh();
            }
        }
    });
}

function load_service_page() {
    load_info();
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "services" },
        success: function (data) {
            data = JSON.parse(data);
            let services = document.getElementById("services");
            for (let i = 0; i < data.length; i++) {
                let div = document.createElement("div");
                div.className = "col-lg-4 col-sm-6";
                let div2 = document.createElement("div");
                div2.className = "security-card";
                let a1= document.createElement("a");
                a1.href = data[i].link;
                a1.target = "_blank";
                let i2 = document.createElement("i");
                i2.className = data[i].icon;
                let h3 = document.createElement("h3");
                let a = document.createElement("a");
                a.href = data[i].link;
                a.target = "_blank";
                a.innerHTML = data[i].title;
                h3.appendChild(a);
                let p = document.createElement("p");
                p.innerHTML = data[i].content;
                a1.appendChild(i2);
                div2.appendChild(a1);
                div2.appendChild(h3);
                div2.appendChild(p);
                div.appendChild(div2);
                services.appendChild(div);
            }
        }
    });
}

function portfolio_sites() {
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "portfolio_sites" },
        success: function (data) {
            data = JSON.parse(data);
            let portfolio_sites = document.getElementById("portfolio_sites");
            for (let i = 0; i < data.length; i++) {
                let div = document.createElement("div");
                div.className = "col-lg-4 col-md-6";
                let div2 = document.createElement("div");
                div2.className = "services-item";
                let a = document.createElement("a");
                a.href = "https://"+data[i].link;
                a.target = "_blank";
                let img = document.createElement("img");
                img.src = "admin/"+(data[i].image).slice(3);;
                img.alt = "Images";
                a.appendChild(img);
                let div3 = document.createElement("div");
                div3.className = "content";
                let i2 = document.createElement("i");
                i2.className = data[i].icon;
                let br = document.createElement("br");
                let h3 = document.createElement("h3");
                let a2 = document.createElement("a");
                a2.href = "https://"+data[i].link;
                a2.target = "_blank";
                a2.innerHTML = data[i].title;
                h3.appendChild(a2);
                div3.appendChild(i2);
                div3.appendChild(br);
                div3.appendChild(h3);
                div2.appendChild(a);
                div2.appendChild(div3);
                div.appendChild(div2);
                portfolio_sites.appendChild(div);
            }
        }
    })
}

function reviews() {
    $.ajax({
        url: "include/functions.php",
        type: "POST",
        data: { action: "reviews" },
        success: function (data) {
            data = JSON.parse(data);
            var reviews = $(".clients-slider").data('owl.carousel');
            for (let i = 0; i < data.length; i++) {
                let div = document.createElement("div");
                div.className = "clients-content";
                let div2 = document.createElement("div");
                div2.className = "content";
                let img = document.createElement("img");
                img.src = "admin/"+(data[i].image).slice(3);
                img.alt = "Images";
                let i2 = document.createElement("i");
                i2.className = "bx bxs-quote-alt-left";
                let h3 = document.createElement("h3");
                h3.innerHTML = data[i].name;
                let span = document.createElement("span");
                span.innerHTML = data[i].position;
                div2.appendChild(img);
                div2.appendChild(i2);
                div2.appendChild(h3);
                div2.appendChild(span);
                let p = document.createElement("p");
                div.style = "height: 252px;"
                div.appendChild(div2);
                div.appendChild(p);
                reviews.add(div);
                reviews.refresh();
            }
        }
    })
}

