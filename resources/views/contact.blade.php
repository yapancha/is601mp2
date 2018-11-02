<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-5 pt-5">
    <h1>Contact</h1>
    <p>Contact the website owner</p>
    <form action="{{route('contact.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name" type="text" class="form-control" id="email" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message:</label>
            <textarea name="body" class="form-control" id="body" rows="3" placeholder="Message..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>