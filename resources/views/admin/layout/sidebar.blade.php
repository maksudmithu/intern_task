<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Task">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i
                        class="bi bi-grid-fill"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{ asset('/') }}/assets/images/brand-logo-2.png" width="140" alt="" />
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Task</h5>
                        </div>
                        <small class="mb-0">Task Details</small>
                    </div>
                    <a href="{{ route('task.create') }}" class="list-group-item"><i class="bi bi-envelope"></i>Add
                        Task</a>
                    <a href="{{ route('task.index') }}" class="list-group-item"><i class="bi bi-envelope"></i>All
                        Task</a>
                </div>
            </div>
        </div>
    </div>
</aside>
