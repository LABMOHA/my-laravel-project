<div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
  <div class="card">
    <div class="card-content">
      <div class="flex items-center justify-between">
        <div class="widget-label">
          <h3>
            Users
          </h3>
          <h1>
            {{$count_p}}
          </h1>
        </div>
        <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-content">
      <div class="flex items-center justify-between">
        <div class="widget-label">
          <h3>
            Companies
          </h3>
          <h1>
            {{$count_c}}
          </h1>
        </div>
        <span class="icon widget-icon text-blue-500"><i class="mdi mdi-domain mdi-48px"></i></span>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <div class="flex items-center justify-between">
        <div class="widget-label">
          <h3>
            Jobs
          </h3>
          <h1>
            {{$count_j}}
          </h1>
        </div>
        <span class="icon widget-icon text-red-500"><i class="mdi mdi-briefcase mdi-48px"></i></span>
      </div>
    </div>
  </div>
</div>