<form action="thank-you-change-desk.php" method="post">
  <div class="form-group">
    <label>Фамилия, Имя<span class="red">*</span></label>
    <input type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name" required> 
  </div>
  <div class="form-group">
    <label>Телефон<span class="red">*</span></label>
    <input type="text" class="phone-field form-control" placeholder="Введите номер телефона" name="phone" required>
  </div>
  <div class="form-group">
    <label>Email (электронная почта)</label>
    <input type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
  </div>
  <div class="form-group">
    <label>Причина смены партнера</label>
    <input type="text" class="form-control" placeholder="Напишите причину смены партнера" name="cause">
  </div>
  <!-- На десктопах будет ссылка на скачивание договора -->
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name="agree" checked disabled>
      с условиями <a href="downloads/agreement.docx" target="_blank">агентского договора</a> ознакомлен и согласен
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Сменить партнера</button>
</form>