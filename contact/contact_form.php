<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trumpo</title>

    <?php
    include("../links.php");
    ?>

</head>



<body>
    <?php
    include("../header.php");
    ?>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-3">Contact Us</h3>
                        <form>
                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Subject Field -->
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-3">
                                <label for="message" class="form-label">Message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>

                            <!-- Partner Checkbox -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="partner" name="partner">
                                    <label class="form-check-label" for="partner">
                                        Want to become a partner?
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../footer.php");
    ?>



</body>

</html>