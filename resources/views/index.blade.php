<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <meta charset="utf-8">
  <title>Setting</title>
</head>
<body>
  <header class="setting-page__header">
    <h1 class="setting-page__title">System Setting</h1>
  </header>
  <div class="system-purpose">
    <div class="system-purpose__header">
      <span class="system-purpose__title">System Purpose</span>
      <div class="system-purpose__dropdown">
        <select id="dropdown-menu" name="dropdown">
          <option class="dropdown-menu__subtitle">Please select your ID</option>
          @foreach ($peopele_id_list as $selected_id)
            <option value="{{ $selected_id->id }}" {{ $selected_id->id == "condition" ? 'selected' : '' }}>{{ $selected_id->id }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <ul class="system-purpose__contents">
      <li>
        <div class="system-purpose__content-btn">
          <a href="#" id="system-purpose__btn-modify" class="system-purpose__btn-title">Modify</a>
        </div>
        <span class="system-purpose__btn-text">Modify the selected System Purpose</span>
      </li>
      <li>
        <div class="system-purpose__content-btn">
          <a href="/new" class="system-purpose__btn-title">New</a>
        </div>
        <span class="system-purpose__btn-text">Registration New Purpose</span>
      </li>
      <li>
        <div class="system-purpose__content-btn">
          <a href="#" id="system-purpose__btn-gotoready" class="system-purpose__btn-title">GotoReady</a>
        </div>
        <span class="system-purpose__btn-text">Common Setting</span>
      </li>
    </ul>
  </div>
  <div class="system-operation">
    <div class="system-operation__header">
      <span class="system-operation__title">System Operation</span>
    </div>
    <div class="system-operation__contents">
      <button class="system-operation__content-btn" type="submit" value="START" id="start-btn" {{ $start_btn_state ? '' : 'disabled' }}>START</button>
      <input type="hidden" name="start_btn_state" value="{{ $start_btn_state }}">
      <span class="system-operation__btn-text">Write Json File</span>
    </div>
  </div>

  <script>
    document.getElementById('system-purpose__btn-modify').addEventListener('click', function() {
      const dropdownSelect = document.getElementById('dropdown-menu');
      const selectedId = dropdownSelect.value;
      window.location.href = "/modify/" + selectedId;
    });

    document.getElementById('system-purpose__btn-gotoready').addEventListener('click', function() {
    const dropdownSelect = document.getElementById('dropdown-menu');
    const selectedId = dropdownSelect.value;
    window.location.href = "/setting/gotoready/" + selectedId;
  });
  </script>
</body>
</html>
