@extends('layouts.master')
@section('content')


<div class="content">
    <div class="row">
        <div class="col-md-5 col-xl-3">
            <!-- Toggle Inbox Side Navigation -->
            <div class="d-md-none push">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-primary" data-toggle="class-toggle" data-target="#one-inbox-side-nav" data-class="d-none">
                    Inbox Menu
                </button>
            </div>
            <!-- END Toggle Inbox Side Navigation -->

            <!-- Inbox Side Navigation -->
            <div id="one-inbox-side-nav" class="d-none d-md-block push">
                <!-- Inbox Menu -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default bg-dark">
                        <h3 class="block-title text-light">Inbox</h3>
                        <div class="block-options">
                            {{-- <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#one-inbox-new-message">
                                <i class="fa fa-pencil-alt mr-1"></i> New Message
                            </button> --}}
                        </div>
                    </div>
                    <div class="block-content">
                        <ul class="nav nav-pills flex-column font-size-sm push">
                            <li class="nav-item my-1">
                                <a class="nav-link d-flex justify-content-between align-items-center active bg-danger" href="">
                                    <span>
                                        <i class="fa fa-fw fa-inbox mr-1"></i> Inbox
                                    </span>
                                    <span class="badge badge-pill badge-light text-danger">{{ $count_emails }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Inbox Menu -->
            </div>
            <!-- END Inbox Side Navigation -->
        </div>
        <div class="col-md-7 col-xl-9">
            <!-- Message List -->
            <div class="block block-rounded">
                <div class="block-header block-header-default bg-danger">
                    {{-- <h3 class="block-title">
                        15-30 <span class="font-w400 text-lowercase">from</span> 700
                    </h3> --}}
                    <div class="block-options ">
                        {{-- <button type="button" class="btn-block-option" data-toggle="tooltip" data-placement="left" title="Previous 15 Messages">
                            <i class="si si-arrow-left"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="tooltip" data-placement="left" title="Next 15 Messages">
                            <i class="si si-arrow-right"></i>
                        </button> --}}
                        {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button> --}}
                        <div style="position:relative;left:750px;"><button type="button" class="btn-block-option text-light" data-toggle="block-option" data-action="fullscreen_toggle"></button></div>
                    </div>
                </div>
                <div class="block-content bg-secondary text-light py-0">
                    <!-- Messages Options -->
                    {{-- <div class="d-flex justify-content-between push"> --}}
                        {{-- <div class="btn-group">
                            <button class="btn btn-sm btn-light" type="button">
                                <i class="fa fa-archive text-primary"></i>
                                <span class="d-none d-sm-inline ml-1">Archive</span>
                            </button>
                            <button class="btn btn-sm btn-light" type="button">
                                <i class="fa fa-star text-warning"></i>
                                <span class="d-none d-sm-inline ml-1">Star</span>
                            </button>
                        </div>
                        <button class="btn btn-sm btn-light" type="button">
                            <i class="fa fa-times text-danger"></i>
                            <span class="d-none d-sm-inline ml-1">Delete</span>
                        </button> --}}
                    {{-- </div> --}}
                    <!-- END Messages Options -->

                    <!-- Messages and Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
                    <div class="pull-x">
                        <table class="js-table-checkable table  font-size-sm text-light">
                            <tbody>
                                @php
                                $isEmpty = count($emails);
                                @endphp
                                @if($isEmpty>0)
                                    @foreach ($emails as $email)
                                    <tr id="row-page"onclick="myFunction({{ $email->id }})">
                                        {{-- <td class="text-center" style="width: 60px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="inbox-msg15" name="inbox-msg15">
                                                <label class="custom-control-label font-w400" for="inbox-msg15"></label>
                                            </div>
                                        </td> --}}
                                        <td class="d-none d-sm-table-cell font-w600" style="width: 140px;">{{ $email->first_name.' '. $email->last_name }}</td>
                                        <td>
                                            <div class="font-w600 text-center text-light">{{ $email->email }}</div>
                                        </td>
                                        <td class="d-none d-xl-table-cell text-light" style="width: 120px;">
                                            {{ $email->company_name . ' company'}}
                                        </td>
                                        <td class="d-none d-xl-table-cell text-light" style="width: 200px;">
                                            <em>{{ $email->created_at }}</em>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="font-weight-bold text-center">There is no emails</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- END Messages and Checkable Table -->
                </div>
            </div>
            <!-- END Message List -->
        </div>
    </div>
</div>
<script>
function myFunction(id) {
    window.location.href =document.URL+"/"+id;
}
</script>
@endsection
