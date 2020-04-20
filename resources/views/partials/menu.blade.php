<ul class="nav nav-pills nav-justified p-5">
  <li class="nav-item">
    <a class="nav-link active" href="/dashboard/reservations">Your Reservations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Register Property</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Profile Settings</a>
  </li>
</ul>

<div class="container">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Reservations
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/dashboard/reservations/create/{id}">Create</a>
      <a class="dropdown-item" href="/dashboard/reservations">View</a>
      <a class="dropdown-item" href="/dashboard/reservations/edit">Edit</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Properties
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="properties/create">Create</a>
      <a class="dropdown-item" href="/properties">View</a>
      <a class="dropdown-item" href="properties/edit">Edit</a>
    </div>
  </div>
</div>