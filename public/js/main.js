const $aviso = document.querySelector(".alert");
if ($aviso) {
  setTimeout(() => {
    $aviso.remove();
  }, 3000);
}
