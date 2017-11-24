<form action="thank-you-mob.php" method="post">
  <div class="form-group">
    <label>Имя</label>
    <input type="text" class="form-control" placeholder="Введите ваше имя" name="name"> 
  </div>
  <div class="form-group">
    <label>Телефон<span class="red">*</span></label>
    <input id="phone-field-mob" type="text" class="phone-field-mob form-control" placeholder="Введите номер телефона" name="phone" required>
  </div>
  <div class="form-group">
    <label>Email (электронная почта)</label>
    <input type="email" class="form-control" placeholder="Введите email" name="email">
  </div>
  <div class="form-group">
    <label>Ваш вопрос</label>
    <textarea class="form-control" rows="3" placeholder="Введите ваш вопрос" name="question"></textarea>
  </div>
  <button class="btn-send" type="submit" class="btn btn-primary">Отправить</button>
</form>