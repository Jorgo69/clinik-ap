<div class="container py-8">
    <!-- Title -->
    <div class="mb-8">
        <h2 class="fw-bold m-0">Chats</h2>
    </div>

    <!-- Search -->
    {{-- <div class="mb-6">
        <form action="#">
            <div class="input-group">
                <div class="input-group-text">
                    <div class="icon icon-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                </div>

                <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
            </div>
        </form>
    </div> --}}

    <!-- Chats -->
    <div class="card-list">
        <!-- Card -->
        <a href="#" class="card border-0 text-reset mb-3">
            <div class="card-body">
                <div class="row gx-5">
                    <div class="col-auto">
                        <div class="avatar avatar-online">
                            <img src="http://localhost:8000/assets/others/img/user.jpg" alt="#" class="avatar-img">
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="me-auto mb-0">William Wright</h5>
                            <span class="text-muted extra-small ms-2">12:45 PM</span>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="line-clamp me-auto">
                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                            </div>

                            <div class="badge badge-circle bg-primary ms-5">
                                <span>3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .card-body -->

            {{-- <div class="card-footer">
                <div class="row align-items-center gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xs">
                            <img class="avatar-img" src="http://localhost:8000/assets/others/img/user.jpg" alt="Bootstrap Community">
                        </div>
                    </div>
                </div>
                <!-- .row -->
            </div> --}}
            <!-- .card-footer -->
        </a>
        <!-- Card -->

        <!-- Card -->
        <a href="chat-direct.html" class="card border-0 text-reset">
            <div class="card-body">
                <div class="row gx-5">
                    <div class="col-auto">
                        <div class="avatar avatar-online">
                            <img src="http://localhost:8000/assets/others/img/user.jpg" alt="#" class="avatar-img">
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="me-auto mb-0">Ollie Chandler</h5>
                            <span class="text-muted extra-small ms-2">08:45 PM</span>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="line-clamp me-auto">
                                Hello! Yeah, I'm going to meet friend of mine at the departments stores now.
                            </div>

                            <div class="badge badge-circle bg-primary ms-5">
                                <span>3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .card-body -->
        </a>
        <!-- Card -->
        
    </div>
    <form class="chat-form rounded-pill bg-dark" data-emoji-form="">
        <div class="row align-items-center gx-0">
            <div class="col-auto">
                <a href="#" class="btn btn-icon btn-link text-body rounded-circle dz-clickable" id="dz-btn">
                    <img src="http://localhost:8000/assets/others/img/user.jpg" alt="">
                </a>
            </div>

            <div class="col">
                <div class="input-group">
                    <textarea class="form-control px-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 47.2px;"></textarea>

                    <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
                        <span class="icon icon-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-auto">
                <button class="btn btn-icon btn-primary rounded-circle ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                </button>
            </div>
        </div>
    </form>
    <!-- Chats -->
</div>