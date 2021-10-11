@extends('backend.layouts.master')

@section('title','Agent-List')
@section('page-header')
    <i class="fa fa-list"></i> Agent List
@stop

@push('css')
    <style>
        table th,
        td {
            text-align: center !important;
            vertical-align: middle !important;
        }
        .profile-info-name {
            text-align: right;
            padding: 4px 0px 6px 13px;
            font-weight: 400;
            color: #667e99;
            background-color: transparent;
            width: 20%;
            vertical-align: middle;
        }
    </style>
@endpush
@php
    $allocatedCity      = $cities->where('id', $agent->allocatedArea->city_id??' ')->pluck('name')->first();
    $extendedCity       = $cities->where('id', $agent->extendArea->city_id??' ')->pluck('name')->first();
    $allocatedDivision  = $divisions->where('id', $agent->allocatedArea->division_id??' ')->pluck('name')->first();
    $extendDivision     = $divisions->where('id', $agent->extendArea->division_id??' ')->pluck('name')->first();
    //  {{ in_array($postcode->id, $area_ids) ? 'selected' : ''}}
@endphp

@section('content')
    @include('backend.components.page_header', [
       'fa' => 'fa fa-pencil',
       'name' => 'List customer',
       'route' => route('backend.agent.index')
    ])

    <div class="col-xs-12 col-sm-9">
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Username </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="username">{{ $agent->name??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Location/Address </div>

                <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                <span class="editable editable-click" id="country">{{ $agent->address??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Type </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $agent->type == 'personal'?"Personal" : "Business" }}</span>
                </div>
            </div>

            @if($agent->type == 'personal')
                <div class="profile-info-row">
                    <div class="profile-info-name"> Education Level</div>

                    <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{ $agent->education??' ' }}</span>
                    </div>
                </div>
            @else
                <div class="profile-info-row">
                    <div class="profile-info-name"> Contact Person </div>

                    <div class="profile-info-value">
                    <span class="editable editable-click" id="age">{{  $agent->contact_person??" " }}</span>
                    </div>
                </div>
            @endif
            {{-- @dd($agent->delivery->email) --}}
            <div class="profile-info-row">
                <div class="profile-info-name"> Phone </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $agent->delivery->phone??'' }}</span>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Email </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $agent->delivery->email??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> NID Number </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $agent->nid_number??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Bank Name </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $agent->bank_name??''	 }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Bank Account Number </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="age">{{ $agent->bankaccountnumber??' '	 }}</span>
                </div>
            </div>

        </div>
        <br>
        <br>
        <p><i class="menu-icon fa fa-area-chart"></i> Allocated Area </p>
        <hr>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Division </div>
                <div class="profile-info-value">
                <span class="editable editable-click" id="username">{{  $allocatedDivision??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> City </div>
                <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                <span class="editable editable-click" id="country">{{ $allocatedCity??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Area </div>
                <div class="profile-info-value">
                <span class="editable editable-click" id="age">
                    @if($agent->allocatedArea)
                        @if($agent->allocatedArea->posts)
                            @foreach ($agent->allocatedArea->posts??" " as $allocatedAreaPost){{ $allocatedAreaPost->name.' ,' }}@endforeach
                        @endif
                    @endif
                </span>
                </div>
            </div>
        </div>
        <br>
        <br>
        <p><i class="menu-icon fa fa-area-chart"></i> Extend Area </p>
        <hr>
        <div class="profile-user-info profile-user-info-striped">

            <div class="profile-info-row">
                <div class="profile-info-name"> Division </div>

                <div class="profile-info-value">
                <span class="editable editable-click" id="username">{{ $extendDivision??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> City </div>
                <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                    <span class="editable editable-click" id="country">{{ $extendedCity??'' }}</span>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Area </div>
                    <div class="profile-info-value">
                    <span class="editable editable-click" id="age">
                    @if($agent->extendArea)
                        @if($agent->extendArea->posts)
                            @foreach ($agent->extendArea->posts as $extendAreaPost){{ $extendAreaPost->name.' ,' }}@endforeach
                        @endif
                    @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 center">
        <div>
            <span class="profile-picture">
            <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{ asset($agent->logo?? ' ')}}" width="200px" height="200px">
        </span>
        {{-- @dd($agent) --}}
            <div class="space-4"></div>

            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <i class="ace-icon fa fa-circle light-green"></i> &nbsp; <span class="white">{{ $agent->name??'' }}</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="space-6"></div>

        <div class="hr hr12 dotted"></div>
    </div>
@endsection


