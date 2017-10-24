$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function proyectView(){
  datos = 1;
  $.post("/proyect", datos)
  .done(function (data) {
    $(".content-app").html(data);
  })
  .fail(function (data) {
      console.log('error')
  });
}

function userView(){
  datos = 1;
  $.post("/user", datos)
  .done(function (data) {
      $(".content-app").html(data);
  })
  .fail(function (data) {
      console.log('error')
  });
}
function messageView(){
  datos = 1;
  $.post("/message", datos)
  .done(function (data) {
    $(".content-app").html(data);
  })
  .fail(function (data) {
      console.log('error')
  });
}
function listView(){
  datos = 1;
  $.post("/list", datos)
  .done(function (data) {
    $(".content-app").html(data);
  })
  .fail(function (data) {
      console.log('error')
  });
}
