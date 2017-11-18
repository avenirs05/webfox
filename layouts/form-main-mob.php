<form action="thank-you-mob.php" method="post">
  <div class="form-group">
    <label>Фамилия, Имя<span class="red">*</span></label>
    <input type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name-mob" required> 
  </div>
  <div class="form-group">
    <label>Телефон<span class="red">*</span></label>
    <input type="text" class="phone-field-mob form-control" placeholder="Введите номер телефона" name="phone-mob" required>
  </div>
  <div class="form-group">
    <label>Email (электронная почта)</label>
    <input type="email" class="form-control" placeholder="Например, ivanov@mail.ru" name="email-mob">
  </div>
  <div class="form-group">
    <label>Марка и модель авто</label>
    <input type="text" class="form-control" placeholder="Например, Ford Focus" name="brand-and-model-mob">
  </div>
  <div class="form-group">
    <label>Год выпуска авто</label>
    <input type="text" class="form-control" placeholder="Введите год выпуска" name="year-mob">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name="agree-mob" checked disabled>
      с условиями <a href="agreement.php" target="_blank">агентского договора</a> ознакомлен и согласен
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Стать водителем</button>
</form>