function login(user_id, password) {
  console.log(user_id);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "login",
      user_id: user_id,
      password: password,
    },
    success: function (data) {
      data = JSON.parse(data);
      console.log(data);

      if (data[0] == "Login Successfull") {
        window.location.href = "dashboard.php";
      } else {
        alert("Invalid Credentials");
      }
    },
  });
}
function logout_user() {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "logout_user",
    },
    success: function (data) {
      if (data == "logout_user") {
        window.location.href = "login.php";
      }
    },
  });
}
function change_password(inputPasswordOld, inputPasswordNew, user_id) {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "change_password",
      old_password: inputPasswordOld,
      new_password: inputPasswordNew,
      user_id: user_id,
    },
    success: function (res) {
      if (res == "Password Changed Successfully") {
        $.ajax({
          url: "include/functions.php",
          type: "POST",
          data: {
            action: "logout1",
          },
          success: function (res) {
            if (res == "logout1") {
              alert("Password Changed Successfully");
              window.location.href = "login.php";
            }
          },
        });
      } else {
        alert("Current Password is Wrong");
      }
    },
  });
}
function home(aform) {
  console.log(aform);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: aform,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
    },
  });
}
function show_home() {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "show_home",
    },
    success: function (data) {
      data = JSON.parse(data);
      console.log(data);

      for (var i = 0; i < data.length; i++) {
        let home_title = document.getElementById("home_title");
        let home_description = document.getElementById("home_description");
        let home_img = document.getElementById("home_img");
        let about_title = document.getElementById("about_title");
        let about_description = document.getElementById("about_description");
        let about_img = document.getElementById("about_img");
        let contact_title = document.getElementById("contact_title");
        let contact_description = document.getElementById(
          "contact_description"
        );
        let contact_img = document.getElementById("contact_img");
        let satisfied_clients = document.getElementById("satisfied_clients");
        let projects_completed = document.getElementById("projects_completed");
        let country_worldwide = document.getElementById("country_worldwide");
        home_title.value = data[0].home_title;
        home_description.value = data[0].home_description;
        home_img.scr = data[0].home_img;
        about_title.value = data[0].about_title;
        about_description.value = data[0].about_description;
        about_img.src = data[0].about_img;
        contact_title.value = data[0].contact_title;
        contact_description.value = data[0].contact_description;
        contact_img.src = data[0].contact_img;
        satisfied_clients.value = data[0].satisfied_clients;
        projects_completed.value = data[0].projects_completed;
        country_worldwide.value = data[0].country_worldwide;
      }
    },
  });
}
function about(form) {
  console.log(form);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: form,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
    },
  });
}

function show_about() {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "show_about",
    },
    success: function (data) {
      data = JSON.parse(data);
      console.log(data);

      for (var i = 0; i < data.length; i++) {
        let about_title = document.getElementById("about_title");
        let about_description = document.getElementById("about_description");
        let about_img = document.getElementById("about_img");
        let image_title = document.getElementById("img_title");
        let content = document.getElementById("about_content");
        about_title.value = data[0];
        about_description.value = data[1];
        about_img.src = data[2];
        image_title.value = data[3];
        content.value = data[4];
      }
    },
  });
}
function services(form, summernote) {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: { summernote:summernote,action: "services",form: $('Form').serialize()},

    
    success: function (data) {
      console.log(data);
      show_services();
    },
  });
  // window.location.reload();
}
function show_services() {
  var table = $("#dataTable").DataTable();
  var button = document.createElement("button");
  button.innerHTML = "Delete";
  button.className = "btn btn-danger";
  button.id = "delete";

  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: { action: "show_services" },

    success: function (data) {
      if (data != "") {
        data = JSON.parse(data);
        $.each(data, function (i, item) {
          table.row
            .add([
              item.title,
              item.content,
              item.icon,
              item.link,
              item.main_content,            
              '<button class="btn btn-danger" id="' +
                item.service_id +
                '" onclick="delete1(this.id)">Delete</button>'
            ])
            .draw();
        });
      }
    },
  });
}
function portfolio(form) {
  console.log(form);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: form,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
      window.location.reload();
    },
  });
}
function show_portfolio() {
  let portfolio_title = document.getElementById("portfolio_title");
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "show_portfolio",
    },
    success: function (data) {
      data = JSON.parse(data);
      console.log(data);

      for (var i = 0; i < data.length; i++) {
       

        portfolio_title.value = data[0];

      }
    },
    
  });
}
function info(form) {
  console.log(form);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: form,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
    },
  });
}
function show_info() {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "show_info",
    },
    success: function (data) {
      console.log(data);
      data = JSON.parse(data);
      console.log(data);

     
        let contact = document.getElementById("contact");
        let email = document.getElementById("email");
        let address = document.getElementById("address");
        let facebook = document.getElementById("facebook");
        let twitter = document.getElementById("twitter");
        let instagram = document.getElementById("instagram");
        let linkedin = document.getElementById("linkedin");
        let footer_description = document.getElementById("footer_desc");
        let uk_contact = document.getElementById("uk_contact");
        let uk_address = document.getElementById("uk_address")
        contact.value = data[0].contact_number;
        email.value =data[0].email;
        address.value = data[0].address;
        console.log(data[0].address);
        facebook.value = data[0].facebook;
        twitter.value = data[0].twitter;
        instagram.value = data[0].instagram;
        linkedin.value = data[0].linkdin;
        footer_description.value =  data[0].footer_description;
        uk_contact.value = data[0].uk_contact;
        uk_address.value = data[0].uk_address;
        
      
    },
  });
}

function delete1(id) {
  console.log(id);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "delete1",
      id: id,
    },
    success: function (data) {
      console.log(data);
      window.location.reload();
    },
  });
}
function brands(form) {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: form,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
    },
  });
}
function show_brands() {
  var table = $("#dataTable").DataTable();
  var button = document.createElement("button");
  button.innerHTML = "Delete";
  button.className = "btn btn-danger";
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: { action: "show_brands" },
   

    success: function (data) {
      if (data != "") {
        data = JSON.parse(data);
        $.each(data, function (i, item) {
          table.row
            .add([
              '<img src="'+item.brand_img.slice(3)+'"style="height:75px" alt=""</img>',

              '<button class="btn btn-danger" id="' +
                item.brand_id +
                '" onclick="delete2(this.id)">Delete</button>',
            ])
            .draw();
        });
      }
    },
  });
}
function delete2(id) {
  console.log(id);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "delete_brands",
      id: id,
    },
    success: function (data) {
      console.log(data);
      window.location.reload();
    },
  });
}
function portfolio_sites(form) {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: form,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
      window.location.reload();
    },
  });
 

     
    }
  function show_portfolio_sites() {
  var table = $("#dataTable").DataTable();
  
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: { action: "show_portfolio_sites" },



    success: function (data) {
    
      if (data != "") {
        data = JSON.parse(data);
        console.log(data);
        
        $.each(data, function (i, item) {
          table.row
            .add([
              item.title,
              item.icon,
              item.link,
              '<img src="'+item.image.slice(3)+'"style="height:75px" alt=""</img>',
              '<button class="btn btn-danger" id="' +
                item.ps_id +
                '" onclick="delete3(this.id)">Delete</button>'
            ])
            .draw();
        });
      }
    },
  });
}
function delete3(id) {
  console.log(id);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "delete_portfolio_sites",
      id: id,
    },
    success: function (data) {
      console.log(data);
      window.location.reload();

    },
  });
  
 
}
function qualities(form) {
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: form,
    contentType: false,
    processData: false,
    success: function (data) {
      // data = JSON.parse(data);

      console.log(data);
      window.location.reload();
    },
  });
}
function show_qualities() {
  var table = $("#dataTable").DataTable();
  counter=1 
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: { action: "show_qualities" },
    success: function (data) {
      if (data != "") {
        data = JSON.parse(data);
        console.log(data);
        $.each(data, function (i, item) {
          table.row
            .add([
            counter++ ,
              item.q_text,
             
              '<button class="btn btn-danger" id="' +
                item.q_id +
                '" onclick="delete4(this.id)">Delete</button>',
            ])
            .draw();
        });
      }
    },
  });
}
function delete4(id) {
  console.log(id);
  $.ajax({
    url: "include/functions.php",
    type: "POST",
    data: {
      action: "delete_qualities",
      id: id,
    },
    success: function (data) {
      console.log(data);
      window.location.reload();
    },
  });
}
    