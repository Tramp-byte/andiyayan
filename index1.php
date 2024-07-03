<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WhatsApp Button</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .floating {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
      transition: opacity 0.4s ease, visibility 0.4s ease;
    }

    .fab-icon {
      margin-top: 16px;
    }

    .floating.hidden {
      opacity: 0;
      visibility: hidden;
    }
  </style>
</head>
<body>
  <!-- Existing content -->

  <!-- WhatsApp Button -->
  <a href="https://wa.me/6281228430523?text=Hi%20Qiscus" class="floating" target="_blank">
    <i class="fab fa-whatsapp fab-icon"></i>
  </a>

  <!-- Existing content -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var floatingButton = document.querySelector('.floating');
      var lastScrollTop = 0;

      window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
          // Scroll ke bawah
          floatingButton.classList.add('hidden');
        } else {
          // Scroll ke atas
          floatingButton.classList.remove('hidden');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Untuk Mobile atau scroll ke atas
      });
    });
  </script>
</body>
</html>
