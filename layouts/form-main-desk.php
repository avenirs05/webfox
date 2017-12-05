<form action="thank-you-desk.php" method="post">
  <div class="form-group">
    <label>Имя</label>
    <input type="text" class="form-control" placeholder="Введите ваше имя" name="name"> 
  </div>
  <div class="form-group">
    <label>Телефон<span class="red">*</span></label>
    <input id="phone-field-desk" type="text" class="phone-field-desk form-control" placeholder="Введите номер телефона" name="phone" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Сообщение</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите сообщение" name="question"></textarea>
  </div>
  <input id="tariff-field-desk" type="hidden" name="tariff"> 
  <button class="btn-send" type="submit" class="btn btn-primary">Отправить</button>
</form>