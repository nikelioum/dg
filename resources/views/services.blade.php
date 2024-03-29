@extends('layouts.main')
@section('title','Υπηρεσίες Σχεδιασμού Ιστοσελίδων | Εξειδικευμένο Web Development | DGSolutions')
@section('meta_description', 'Ανακαλύψτε τις εξειδικευμένες υπηρεσίες σχεδιασμού ιστοσελίδων που προσφέρει η DGSolutions. Από τον σχεδιασμό εταιρικών ιστοσελίδων έως το e-commerce και τον προσαρμοσμένο λογισμικό, είμαστε εδώ για να σας βοηθήσουμε να επιτύχετε τους στόχους σας στο διαδίκτυο.')
@section('og_title', 'Υπηρεσίες Σχεδιασμού Ιστοσελίδων | Εξειδικευμένο Web Development | DGSolutions')
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', 'Ανακαλύψτε τις εξειδικευμένες υπηρεσίες σχεδιασμού ιστοσελίδων που προσφέρει η DGSolutions. Από τον σχεδιασμό εταιρικών ιστοσελίδων έως το e-commerce και τον προσαρμοσμένο λογισμικό, είμαστε εδώ για να σας βοηθήσουμε να επιτύχετε τους στόχους σας στο διαδίκτυο.')
@section('content')
@include('partials.services.header')
@include('partials.services.services')
@include('partials.home.cta')
@endsection
