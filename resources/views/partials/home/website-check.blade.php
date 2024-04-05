<!--pageheader-->
<section class="bg-info bg-opacity-10 pt-xl-9 pb-xl-0 py-5 pattern-square">
    <div class="container">
        <div class="row g-xl-7 gy-5">
            <div class="col-lg-6 col-12">
                <div class="me-xl-7">
                    <div class="mb-5">
                        <h1 class="mb-3">Δωρεάν Αξιολόγηση της Ιστοσελίδας σας</h1>
                        <p>Συμπληρώστε το URL της ιστοσελίδας σας παρακάτω και θα υπολογίσουμε την απόδοση της. Η
                            αξιολόγηση θα σας παρέχει πολύτιμες πληροφορίες για
                            τη βελτίωση της εμπειρίας των χρηστών σας και την απόδοση της ιστοσελίδας σας.</p>
                    </div>
                    <div class="mb-5">
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Ταχύτητα: Χρόνος ανταπόκρισης της ιστοσελίδας.</span>
                            </li>
                            <li class="mb-2 d-flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Απόδοση: Βαθμός ολοκλήρωσης αιτημάτων και αποδοχής
                                    απόκρισης.</span>
                            </li>
                            <li class="mb-2 d-flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </span>
                                <span class="ms-2"> Συνολικός αριθμός αιτημάτων που πραγματοποιούνται στην
                                    ιστοσελίδα.</span>
                            </li>
                            <li class="mb-5 d-flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg>
                                </span>
                                <span class="ms-2">Χρόνος που απαιτείται για να φορτωθεί η ιστοσελίδα πλήρως.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-lg-n9">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div id="performance-test"></div>
                        <form class="row g-3 needs-validation" data-url="/website-checker" novalidate>
                            <div class="col-md-12" id="website-field">
                                <label for="website" class="form-label">Σύνδεσμος της Ιστοσελίδας σας</label>
                                <input type="url" class="form-control" id="website" name="website" required />
                                <div class="invalid-feedback">Εισάγεται έγκυρο σύνδεσμο</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" id="submitBtn" type="submit">ΑΞΙΟΛΟΓΗΣΗ</button>
                            </div>
                            <div id="loader" class="d-none d-flex justify-content-center mt-3">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--pageheader-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(document).ready(function() {
    $('#submitBtn').click(function(event) {
        event.preventDefault();
        var websiteUrl = $('#website').val();
        var url = $('form').data('url');

        // Show loader
        $('#loader').removeClass('d-none');

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                website: websiteUrl,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Handle the response from the first AJAX request
                console.log(response);
                // Hide loader
                $('#loader').addClass('d-none');
                $('#website-field').addClass('d-none');
                // Clear any existing content in the performance-test div
                $('#performance-test').empty();

                // Create a new div to contain the response data
                var responseDataDiv = $('<div>');

                // Add response data to the new div
                responseDataDiv.append('<p>Χρόνος Απόκρισης: ' + response.response_time +
                    ' δευτερόλεπτα</p>');
                responseDataDiv.append('<p>Αριθμός Αιτημάτων: ' + response
                    .number_of_requests + '</p>');

                // Display the rank
                responseDataDiv.append('<p class="rank-round">' + response.rank + '</p>');

                // Append the new div to the performance-test div
                $('#performance-test').append(responseDataDiv);

                // Hide the submit button
                $('#submitBtn').hide();

                // Inside the success callback of your AJAX request
                var contactButton = $('<button>')
                    .addClass('btn btn-primary')
                    .text('ΕΠΙΚΟΙΝΩΝΙΑ')
                    .click(function() {
                        // Remove the button
                        $(this).remove();
                        // Create a new form element
                        var contactForm = $('<form>').addClass('mt-3');

                        // Create an email input field
                        var emailInput = $('<input>')
                            .attr('type', 'email')
                            .attr('placeholder', 'Εισάγεται το email σας')
                            .addClass('form-control mb-2')
                            .prop('required', true) // Make the email input required
                            .appendTo(contactForm);

                        // Create a submit button
                        var submitButton = $('<button>')
                            .addClass('btn btn-primary')
                            .text('ΑΠΟΣΤΟΛΗ')
                            .click(function(event) {
                                event.preventDefault();
                                var email = emailInput.val();
                                // Make the second AJAX request to send the email
                                $.ajax({
                                    url: '/website-checker-email-send',
                                    type: 'POST',
                                    data: {
                                        email: email,
                                        _token: '{{ csrf_token() }}'
                                    },
                                    success: function(response) {
                                        // Handle the response from the second AJAX request
                                        console.log(response);
                                        // If the email was sent successfully, show a message and remove the email input and button
                                        if (response.message === 'Email sent successfully') {
                                            // Remove the email input and button
                                            contactForm.remove();
                                            // Show a thank you message
                                            $('#performance-test').append('<p>Thanks! We will contact you soon.</p>');
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(xhr.responseText);
                                    }
                                });
                            })
                            .appendTo(contactForm);

                        // Append the new form to the container
                        $('#performance-test').append(contactForm);
                    });

                // Append the new button to the container
                $('#performance-test').append(contactButton);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                // Hide loader
                $('#loader').addClass('d-none');
            }
        });
    });
});
</script>

<style>
p.rank-round {
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #8b3dff;
    border-radius: 50%;
    font-size: 25px;
    font-weight: 700;
}
</style>

