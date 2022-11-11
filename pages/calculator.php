
<main>
    <section class="slider py-5">
        <div class="container">
        <form>
            <div class="row">
                <div class="form-group col-6">
                    <label>Frist Number</label>
                    <input type="number" class="form-control" id="number1" placeholder="Input Frist Number">
                </div>
                <div class="form-group col-6">
                    <label>Second Number</label>
                    <input type="number" class="form-control" id="number2" placeholder="Input Second Number">
                </div>
            </div>
            <div class="text-center">
                <div class="mt-4 btn btn-success">Result is : <span class="text-danger" id="result"></span></div>
                <button type="button" id="operator" value="Summation" class="mt-4 btn btn-primary" onclick="add()">Summation</button>
                <button type="button" id="operator" value="Substract" class="mt-4 btn btn-primary" onclick="substract()">Substract</button>
                <button type="button" id="operator" value="Multiply" class="mt-4 btn btn-primary" onclick="mul()">Multiply</button>
                <button type="button" id="operator" value="Division" class="mt-4 btn btn-primary" onclick="div()">Division</button>
            </div>
        </form>
        </div>
    </section>
</main>