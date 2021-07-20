<section role="main" class="content-body">


    <!-- start: page -->
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Basic Forms</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Forms</span></li>
                    <li><span>Basic</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <a href="#" class="fa fa-times"></a>
                        </div>

                        <h2 class="panel-title">Form Event</h2>
                    </header>
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal form-bordered" action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Event Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="eventName" class="form-control" placeholder="Event Name" id="inputPlaceholder">
                                    @error('eventName')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Band Names</label>
                                <div class="col-md-6">
                                    <input type="text" name="bandNames" class="form-control" placeholder="Band Names" id="inputPlaceholder">
                                    @error('bandNames')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Start Time</label>
                                <div class="col-md-6">
                                    <input type="date" name="startDate" class="form-control" placeholder="Start Name" id="inputPlaceholder">
                                    @error('startDate')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">End Time</label>
                                <div class="col-md-6">
                                    <input type="date" name="endDate" class="form-control" placeholder="End Time" id="inputPlaceholder">
                                    @error('endDate')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Portfolio</label>
                                <div class="col-md-6">
                                    <input type="type" name="portfolio" class="form-control" placeholder="Portfolio" id="inputPlaceholder">
                                    @error('portfolio')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Ticket Price</label>
                                <div class="col-md-6">
                                    <input type="type" name="ticketPrice" class="form-control" placeholder="Portfolio" id="inputPlaceholder">
                                    @error('ticketPrice')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder">Status</label>
                                <div class="col-md-6">
                                    <input type="text" name="status" class="form-control" placeholder="Status" id="inputPlaceholder">
                                    @error('status')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="inputPlaceholder"></label>
                                <div class="col-md-6">
                                    <button type="submit"  class="form-control btn btn-primary " placeholder="placeholder" id="inputPlaceholder">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- end: page -->
    </section>

    <!-- end: page -->
</section>
