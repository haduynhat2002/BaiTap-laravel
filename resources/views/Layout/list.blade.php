<section role="main" class="content-body">
    <header class="page-header">
        <h2>Basic Tables</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Tables</span></li>
                <li><span>Basic</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Basic</h2>
                </header>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table mb-none">
                            <thead>

                            <tr>
                                <th>#</th>
                                <th>Event Name</th>
                                <th>Band Names</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Portfolio</th>
                                <th>Ticket Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->eventName}}</td>
                                    <td>{{$item->bandNames}}</td>
                                    <td>{{$item->startDate}}</td>
                                    <td>{{$item->endDate}}</td>
                                    <td>{{$item->portfolio}}</td>
                                    <td>{{$item->ticketPrice}}</td>
                                    <td><a href="/event/update/{{$item->id}}">Edit</a></td>
                                    <td><a href="/event/index/{{$item->id}}" onclick="return confirm('Bạn có chắc ?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('pagination.default', ['paginator' => $list])
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!-- end: page -->
</section>
