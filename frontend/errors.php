<?php if (isset($errors) && count($errors) > 0) : ?>
  <style>
    .error-container {
      background-color: white;
      color: black;
      padding: 30px;
      border: 1px solid #f5c6cb;
      border-radius: 5px;
      margin-bottom: 275px;
      position: absolute;
      font-weight: 100;
      font-size: small;
      margin-right: 275px;
      margin-left: 50px;
    }

    .error-message {
      margin: 0;
    }
  </style>

  <div class="error-container">
    <?php foreach ($errors as $error) : ?>
      <p class="error-message"><?php echo $error ?></p>
    <?php endforeach ?>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var errorContainer = document.querySelector('.error-container');
      var inputFields = document.querySelectorAll('input, select');

      function hideError() {
        errorContainer.style.display = 'none';
      }

      inputFields.forEach(function(input) {
        input.addEventListener('click', hideError);
      });

      errorContainer.addEventListener('click', hideError);
    });
  </script>


      <?php if (count($errors) > 0): ?>
          <div class="error">
              <?php foreach ($errors as $error): ?>
                  <p><?php echo $error; ?></p>
              <?php endforeach ?>
          </div>
      <?php endif ?>

<?php endif ?>
