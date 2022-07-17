<?php
include 'includes/header.php'
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="action.php" method="post">
                        <div class="card">
                            <div class="card-header">
                                <h4>Simple Calculator</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">First Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Actions</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="operator" checked value="+"> +</label>
                                        <label for=""><input type="radio" name="operator" value="-"> -</label>
                                        <label for=""><input type="radio" name="operator" value="*"> *</label>
                                        <label for=""><input type="radio" name="operator" value="/"> /</label>
                                        <label for=""><input type="radio" name="operator" value="%"> %</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '' ?>" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" value="calculatorBtn" class="btn btn-success" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php'
?>
