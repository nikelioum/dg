@extends('layouts.main')
@section('title','Κορυφαία Υπηρεσίες Web Development | Εξειδικευμένη Ομάδα Σχεδιασμού Ιστοσελίδων')
@section('meta_description', 'Αναζητάτε επαγγελματικές υπηρεσίες web development στην Ελλάδα; Η εμπειρία μας και η δέσμευσή μας για υψηλή ποιότητα στον σχεδιασμό ιστοσελίδων θα καλύψει κάθε ανάγκη σας. Επικοινωνήστε για περισσότερες πληροφορίες!')
@section('og_title', 'Κορυφαία Υπηρεσίες Web Development | Εξειδικευμένη Ομάδα Σχεδιασμού Ιστοσελίδων')
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', 'Αναζητάτε επαγγελματικές υπηρεσίες web development στην Ελλάδα; Η εμπειρία μας και η δέσμευσή μας για υψηλή ποιότητα στον σχεδιασμό ιστοσελίδων θα καλύψει κάθε ανάγκη σας. Επικοινωνήστε για περισσότερες πληροφορίες!')
@section('content')
@include('partials.home.hero')
@include('partials.home.services')
@include('partials.home.portfolio')
@include('partials.home.clients')
@include('partials.home.cta')
@endsection



