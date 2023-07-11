<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Modify</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header class="modify-page__header">
    <h1 class="modify-page__title">System Purpose _ Modify</h1>
  </header>
  <div class="system-purpose">
    <div class="system-purpose__header">
      <span class="system-purpose__title">Modify Contents</span>
    </div>
    <form action="{{ route('modify.update', $people->id) }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $people->id }}">
        <div class="modify-contents">
					<div class="modify-content__column">
						<label for="modify__name">NAME :</label>
						<input id="modify__name" name="name" type="text" value="{{ $people->name }}">
					</div>
        </div>
				<div class="modify-contents">
					<div class="modify-content__column">
						<label for="sensing_interval">SENSING INTERVAL :</label>
						<input id="sensing_interval" name="sensing_interval" type="text" value="{{ $people->sensing_interval }}">
					</div>
        </div>
				<div class="modify-contents">
					<div class="modify-content__column">
						<label for="sim_interval">SIM INTERVAL :</label>
						<input id="sim_interval" name="sim_interval" type="text" value="{{ $people->sim_interval }}">
					</div>
        </div>
				<div class="modify-contents">
					<div class="modify-content__column">
						<label for="predict_interval">PREDICT INTERVAL :</label>
						<input id="predict_interval" name="predict_interval" type="text" value="{{ $people->predict_interval }}">
					</div>
        </div>
        <div class="modify-contents">
					<div class="modify-content__confirm-btn">
						<input type="submit" value="SUBMIT">
					</div>
        </div>
    </form>
  </div>
</body>
</html>
