@extends('layouts.datatable.__index')
@push('title', 'PROFILE')

@push('table-header')
<th> Name </th>
<th> Description </th>
@endpush

@push('table-body')
{ data: 'name' },
{ data: 'description' },
@endpush
