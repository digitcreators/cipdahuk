<style>
    @media (min-width: 768px) {
  .justify-content-md-between {
    justify-content: space-between !important;
  }
}

</style>
<div class="pt-3 row flex-lg-row-reverse align-items-center g-5">
        <div class="col-10 mx-auto col-sm-8 col-lg-6 order-2 lg:order-1 header-image">
         <div class="d-flex justify-content-center px-2 px-lg-0 mt-xl-4" style="width: 100%;">
    <div class="mx-auto mx-lg-0 w-100 px-lg-4 position-relative text-black full-width-lg">
        
        <form action="" method="POST">
    @csrf
    <div class="calculator bg-secondary border border-4 rounded-lg p-4 ">
        <div class="text-center">
            <span class="mob-font position-relative top-0 text-white fw-bold p-3 px-4 px-md-4 text-2xl rounded italic">
                Calculate Your Price
            </span>
        </div>

        <!-- Paper Topic -->
        <label for="academic_level" class="visually-hidden">Select Paper Topic</label>
        <div class="mt-3">
            <input type="text" name="paper_topic" placeholder="Paper Topic"
                class="form-control bg-white" required>
        </div>

        <!-- Course Name -->
        <label for="academic_level" class="visually-hidden">Select Course Name</label>
        <div class="mt-3">
            <input type="text" name="course_name" placeholder="Course Name"
                class="form-control bg-white" required>
        </div>

        <!-- Deadline -->
        <label for="deadline" class="visually-hidden">Select Deadline</label>
        <select id="deadline" name="deadline" class="form-select bg-white mt-3">
        <option hidden disabled selected>Deadline</option>
        @foreach ($deadlines as $index => $deadline)
            <option value="{{ $deadline->id }}" data-step="{{ $index }}">
                {{ $deadline->name . ' / ' . \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('d M, Y') }}
            </option>
        @endforeach
        </select>


      <!-- Number of Pages -->
      <label for="no_of_pages" class="visually-hidden">Select No. of Pages</label>
        <div class="mt-3">
            <select id="no_of_pages" name="number_of_pages" class="form-select bg-white">
                @for ($p = 1; $p <= 200; $p++)
                    <option value="{{ $p }}" {{ $p == 1 ? 'selected' : '' }}>
                        {{ $p }} Page(s) / {{ $p * 250 }} Words
                    </option>
                @endfor
            </select>
        </div>


        <!-- Academic Level -->
        <label for="academic_level" class="visually-hidden">Select Academic Level</label>
        <div class="mt-3">
            <select id="academic_level" name="academic_level" class="form-select bg-white">
                <option value="3" data-price="4" selected>CIPD Level 3</option>
                <option value="5" data-price="6">CIPD Level 5</option>
                <option value="7" data-price="8">CIPD Level 7</option>
                <option value="9" data-price="10">HR Assignment</option>
            </select>
        </div>

       <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center text-white mt-4 gap-3">
    
        <!-- Proceed to Order Button -->
        <a href="{{ route('order') }}" class="mt-3 lg:mt-0 bg-primary btn btn-lg text-white">
            Proceed To Order
        </a>
    
        <!-- Total Price -->
        <div class="italic p-3 text-center text-lg rounded fw-semibold">
            Total Price:
            £<span id="cost">4</span>
        </div>
    
    </div>

    </div>
</form>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const academicLevel = document.getElementById("academic_level");
        const pages = document.getElementById("no_of_pages");
        const totalCost = document.getElementById("cost");

      function calculate() {
    const selectedLevel = academicLevel.options[academicLevel.selectedIndex];
    const price = selectedLevel ? parseFloat(selectedLevel.dataset.price || 0) : 0;
    const pageCount = parseInt(pages.value) || 0;

    let total = price * pageCount;
    totalCost.textContent = total % 1 === 0 ? total : total.toFixed(2);
}



        // Default calculation (Level 3 preselected)
        calculate();

        academicLevel.addEventListener("change", calculate);
        pages.addEventListener("change", calculate);
    });
</script>
