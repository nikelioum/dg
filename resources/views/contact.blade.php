@extends('layouts.main')
@section('title','Επικοινωνήστε μαζί μας | Στοιχεία Επικοινωνίας | DGSolutions')
@section('meta_description', 'Επικοινωνήστε μαζί μας για οποιαδήποτε ερώτηση ή πληροφορία. Βρείτε τα στοιχεία επικοινωνίας μας και επικοινωνήστε μαζί μας τώρα για να ξεκινήσετε το επόμενο έργο σας στον κόσμο του web.')
@section('og_title', 'Επικοινωνήστε μαζί μας | Στοιχεία Επικοινωνίας | DGSolutions')
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', 'Επικοινωνήστε μαζί μας για οποιαδήποτε ερώτηση ή πληροφορία. Βρείτε τα στοιχεία επικοινωνίας μας και επικοινωνήστε μαζί μας τώρα για να ξεκινήσετε το επόμενο έργο σας στον κόσμο του web.')
@section('content')
@include('partials.contact.header')
@include('partials.contact.contact')
@endsection