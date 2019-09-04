@extends('layouts.main')
{{-- This home is for non logged in users --}}

@section('page_title', __('index.title') . ' | ')

@section('content')

<div class="bg-secondary text-white py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-8">
                <h1 class="display-4">Yasha Base</h1>
                <p class="lead">
                    Cras odio leo, efficitur a condimentum at, malesuada in odio. Etiam euismod arcu sed molestie
                    lacinia. Fusce a semper metus. Aenean leo eros, malesuada eu elit non, placerat ultrices erat.
                    Aliquam venenatis sollicitudin tellus in auctor.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
  <div class="card-deck text-center">
    <div class="card shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-light">Frontend</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Bootstrap 4</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Blade</li>
          <li>Laravel Mix</li>
          <li>Basic SEO Template</li>
          <li>Multilingual friendly URL's</li>
        </ul>
        <button type="button" class="font-weight-light btn btn-lg btn-block btn-outline-primary">More info</button>
      </div>
    </div>
    <div class="card shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-light">Backend</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Backpack</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>elFinder</li>
          <li>Settings module</li>
          <li>User Roles & Permissions</li>
          <li>Database fast backup module</li>
        </ul>
        <button type="button" class="font-weight-light btn btn-lg btn-block btn-primary">Documentation</button>
      </div>
    </div>
    <div class="card shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-light">GitHub & Packagist</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">composer</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>create-project</li>
          <li>yasha/yasha-base</li>
          <li>--prefer-dist/--prefer-src</li>
          <li>dev-{branch}/x.x.x</li>
        </ul>
        <button type="button" class="font-weight-light btn btn-lg btn-block btn-primary">Go to readme.md</button>
      </div>
    </div>
  </div>

</div>

<div class="bg-info text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="http://placehold.it/1920x1080" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <p>
                    Iusto perferendis rerum fuga ratione. Commodi optio ipsa eius. Rem itaque sapiente officiis
                    exercitationem. Recusandae excepturi tempore mollitia unde soluta molestiae omnis nobis. Voluptatum
                    cumque eaque rerum et ab praesentium quo eligendi. Tempore et id illo saepe eos corrupti error
                    cumque.
                </p>
                <p>
                    Suscipit ut placeat omnis vitae quidem ab doloremque. Deserunt et illo tempora facere possimus.
                    Dolorum qui quia architecto voluptas tempore ut corporis quos.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
