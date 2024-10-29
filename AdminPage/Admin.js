$("#sidebarCollapse").on("click", function () {
    if ($("#sidebar").width()>0) {
        $("#sidebar").css("width", "0");
        $(".content").css("width", "100%");

    }else{
        console.log(window.matchMedia('(max-width: 767px)').matches);
        if (window.matchMedia('(max-width: 767px)').matches){
            $("#sidebar").css("width", "96%");
            $(".content").css("width", "14%");
        }else{
            $("#sidebar").css("width", "250px");
            
        }
    }
});


// $('#pages_icon').on("click", function () {
//     $('#dropdown_user').toggle("show-dropdown-menus");
//     $('#pages-sm-icon').toggleClass("rotate");

// });

$('#shoping_icon').on("click", function () {
    $('#dropdown_catagory').toggle("show-dropdown-menus");
    $('#pages-sm-icon1').toggleClass("rotate");
});

$('#blogs_icon').on("click", function () {
    $('#dropdown_blogs').toggle("show-dropdown-menus");
    $('#pages-sm-icon2').toggleClass("rotate");
});

// Fetch User Data in Modal
$(document).ready(function () {
    $('#myTable').DataTable();
    $('.showdata').on("click", function () {
        var id = $(this).data('userid');
        var profileimage = $(this).data('profileimage');
        var fname = $(this).data('firstname');
        var useremail = $(this).data('useremail');
        var userrole = $(this).data('role');
        var userph = $(this).data('userpho');
        var gender = $(this).data('usergender');
        var dob = $(this).data('userdob');
        var usercountry = $(this).data('usercountry');
        var usercity = $(this).data('usercity');
        var useraddress = $(this).data('useraddress');
        html = '<tr>' + '<td>' + id + '</td>' + '<td>' + fname +  '</td>' +'<td>'+useremail +'</td>' +'<td>'+userrole +'</td>' +'<td>'+userph +'</td>' +'<td>'+gender +'</td>' 
        +'<td>'+dob +'</td>' +'<td>'+usercountry +'</td>' +'<td>'+usercity +'</td>' +'<td>'+useraddress +'</td>' +'<td>'+profileimage +'</td>'   +  '</tr>';
        $('#user_name').html(fname);
        $('#image_show').html(profileimage);
        $('.data-test').html(html);
    });
});

$(".add_shop_item").click(function () {
    var shopTitle = $(this).data('title');
    $('#shopitemtitle').html(shopTitle);
});

$(".updatecatagorybtn").click(function () {
    var updateCatagory = $(this).data('title');
    $('#updatecattitle').val(updateCatagory);
    $('#updatecatagory').html("Update " + updateCatagory + " Catagory");
    var updateCatagoryimage = $(this).data('catimage');
    $('.updatecatagoryimage').attr("src", 'images/Shop_Images/' + updateCatagoryimage);

});

$("#contact_closebtn").on("click", function () {
    $("#setting_card").css("right", "-600px");
});
$("#setting_btn").on("click", function () {
    $("#setting_card").css("right", "0");

});

function triggerClick() {
    document.querySelector('#formFile').click();
}
function DisplayImage(e) {
    if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('#image_placeholder').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
};
// Dropzone.options.dropzonewidget = { 
//     maxFilesize: 2, // 2 MB
//     acceptedFiles: ".jpeg,.jpg,.png,.pdf", // Allowed extensions
//     success: function(file, response){ // Dropzone upload response

//          var jsonObj = JSON.parse(response);

//          if(jsonObj.status == 0){
//                alert(jsonObj.msg);
//          }
//     }
// };



// Chart
// const xValues = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"];

// new Chart("myChart", {
//   type: "line",
//   data: {
//     labels: xValues,
//     datasets: [{

//       data: [0,10,20,30,40,50,60,70,80,90,100,110],
//       borderColor: "green",
//       fill: true
//     }, 
    
//     { 
//       data: [1,2,3,4,5,6,7,8,9,10,11,12],
//       borderColor: "blue",
//       fill: false
//     },
    
//     { 
//         data: [8,7,9,5,8,12,35,22,78,100,5,250],
//         borderColor: "yellow",
//         fill: false
//     },

    
//     { 
//       data: [0,10,20,30,40,50,60,70,80,90,100,110],
//       borderColor: "red",
//       fill: false
//     }]
//   },
//   options: {
//     legend: {display: false}
//   }
// });



// Fetch Blogs Data in Modal
// $(document).on('click','#viewblog',function(e){
//     var blogid = $(this).data('blogid');
//     var authorName = $(this).data('authorname');
//     var authorEmail = $(this).data('authoremail');
//     var authorAddress = $(this). data('authoraddress');
//     var authorPh = $(this).data('authorph');
//     var authorBlurb = $(this).data('authorblurb');
//     var authorCover = $(this).data('authorcover');
//     $('.baname').html("Name: " + authorName);
//     $('#authoremail').html(authorEmail);
//     $('#authoraddress').html(authorAddress);
//     $('#authorph').html(authorPh);
//     $('#authorblurb').html(authorBlurb);
//     $('#authorcover').html(authorCover);
// });


$(".fetchpost_btn").on("click", function (e) {
    let url =$(this).data("url");
    $.ajax({    
        type: "GET",
        url: url, 
        success: function(data){                    
           data=JSON.parse(data);
           $('.authorname').text("Name: " + data.author_name);
           $('#authoremail').text("Email: " + data.author_email);
           $('#authoraddress').text('Address: ' + '<strong>' + data.author_address + '</strong>');
        //    $("#postmodal").modal('show');
        //    $(".postmodal").modal('hide');
           
        }
    });
})




