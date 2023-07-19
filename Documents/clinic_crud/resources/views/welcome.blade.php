@include('pages.header')
  <div class="container">
    <h1>Sevinch Med</h1>
    <form>
      <input type="text" placeholder="Login" required>
      <input type="password" placeholder="Parol" required>
      <input type="submit" value="Kirish">
    </form>
    <p class="error"></p>
  </div>
@include('pages.footer')