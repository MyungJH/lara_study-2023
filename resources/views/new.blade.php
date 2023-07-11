<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>New</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header class="new-page__header">
    <h1 class="new-page__title">System Purpose _ New</h1>
  </header>
  <div class="system-purpose">
    <div class="system-purpose__header">
      <span class="system-purpose__title">New Contents</span>
    </div>
    <form action="{{ route('new.add') }}" method="post">
        @csrf
        {{-- <input type="hidden" name="id" value="{{ $people->id }}"> --}}
        <div class="modify-contents">
					<div class="modify-content__column">
						<label for="modify__name">NAME :</label>
						<input id="modify__name" name="name" type="text">
					</div>
        </div>
				<div class="modify-contents">
					<div class="modify-content__column">
						<label for="sensing_interval">SENSING INTERVAL :</label>
						<input id="sensing_interval" name="sensing_interval" type="text">
					</div>
        </div>
				<div class="modify-contents">
					<div class="modify-content__column">
						<label for="sim_interval">SIM INTERVAL :</label>
						<input id="sim_interval" name="sim_interval" type="text">
					</div>
        </div>
				<div class="modify-contents">
					<div class="modify-content__column">
						<label for="predict_interval">PREDICT INTERVAL :</label>
						<input id="predict_interval" name="predict_interval" type="text">
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
