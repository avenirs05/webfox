<form action="thank-you-desk.php" method="post">
  <div class="form-group">
    <label>Имя<span class="red">*</span></label>
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
    <label for="exampleFormControlTextarea1">Ваш вопрос</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите ваш"></textarea>
  </div>
  <button class="btn-send" type="submit" class="btn btn-primary">Отправить</button>
</form>