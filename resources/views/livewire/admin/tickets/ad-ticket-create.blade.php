


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('livewire.admin.includes.navbar')
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <form wire:submit='store'>

                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Event</h6>
                                <div class="form-floating mb-3">
                                    <input wire:model.defer='title' type="text" class="form-control" id="floatingInput"
                                        >
                                    <label for="floatingInput">Title</label>
                                    @error('title')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input wire:model.defer='date' type="date" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Date</label>
                                    @error('date')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input wire:model.defer='time' type="time" class="form-control" id="floatingPassword"
                                        placeholder="Time">
                                    <label for="floatingPassword">Time</label>
                                    @error('title')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <select wire:model.defer='status' class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>--SELECT STATUS--</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    <label for="floatingSelect">Status</label>
                                    @error('status')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror

                                </div>
                                <div class="form-floating mb-3">
                                    <input wire:model.defer='location' type="text" class="form-control" id="floatingPassword"
                                        placeholder="textarea">
                                    <label for="floatingPassword">Location</label>
                                    @error('location')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror

                                </div>

                                <div class="form-floating">
                                    <textarea wire:model.defer='content' class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 200px; resize:none;"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                    @error('content')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror

                                </div>
                                <div class="my-3">
                                    <input wire:model.defer='image' type="file" class="form-control " id="floatingPassword"
                                        placeholder="textarea">
                                        @error('image')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                    @if ($image)
                                    <img style="width: 50px; height: 50px" src="{{$image->temporaryUrl() }}"
                                        alt="">

                                @endif

                                </div>
                                <div class='my-2'>
                                    <button class="btn btn-primary ">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
          @include('livewire.admin.includes.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


    </div>

  