
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the tabs and the switch button
        const tab1 = document.querySelector(".f-tab-cnt");
        const tab2 = document.getElementById("tab2");
        const switchButton = document.getElementById("switch-tab");
        const backButton = document.querySelector(".back-to-tab-one");

        // Function to toggle between the two tabs
        function toggleTabs() {
            if (tab1.style.display === "block" || tab1.style.display === "") {
                tab1.style.display = "none";
                tab2.style.display = "block";
            } else {
                tab1.style.display = "block";
                tab2.style.display = "none";
            }
        }

        // Add a click event listener to the switch button
        switchButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });

        // Add a click event listener to the back link
        backButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });
        
    });
<script>
// Add an event listener to the "Marital Status" radio buttons
    $('input[name="maritalStatus"]').on('change', function() {
        if ($(this).val() === 'Married') {
            $('#marriedStatusSection').show();
        } else {
            $('#marriedStatusSection').hide();
        }
    });
</script>
    

///////////////////

    <script>
    // Add an event listener to the "Marital Status" radio buttons
    $('input[name="maritalStatus"]').on('change', function() {
        if ($(this).val() === 'Married') {
            $('#marriedStatusSection').show();
        } else {
            $('#marriedStatusSection').hide();
        }
    });
    </script>
    <!-- js marrige filling section dependecy -->
    <script>
    $(document).ready(function() {
        $('#dependentsSection').show();

        // event listener to the radio buttons for "Married Filing Status"
        $('input[name="marriedStatus"]').change(function() {
            if ($(this).val() === 'Married Filing Separately') {
                $('#dependentsSection').show();
            } else if ($(this).val() === 'Married Filing Jointly') {
                $('#dependentsSection').hide();
            }
        });
    });
    </script>
    <!-- script for dependent -->
    <script>
    $(document).ready(function() {
        //  event listener to the radio buttons for "Do you have any dependents"
        $('input[name="dependents"]').change(function() {

            if ($(this).val() === 'have any dependents yes') {

                $('#dependencyCountSection').show();
            } else {

                $('#dependencyCountSection').hide();
            }
        });
    });
    </script>
    <!-- dependency blue tab open  -->
    <script>
    $(document).ready(function() {
        // Initially, hide all dependent input sections
        $('#dependentSections').hide();

        // Add an event listener to the "count-depend" select input
        $('#count-depend').change(function() {
            // Get the selected count of dependents
            var selectedCount = parseInt($(this).val());

            // Hide all dependent input sections
            $('#dependentSections').hide();

            // Create and populate dependent input sections based on the selected count and show them
            for (var i = 1; i <= selectedCount; i++) {
                var dependentSection = `
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab">
                        <div class="form-section-divident text-left">
                            <h6>Dependent ${i}</h6>
                        </div>
                        <!-- form dependency -->
                        <div class="row dependency-form-control px-2">
                            <!-- Add your input fields for each dependent here -->
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                <div class="form-group">
                                    <label class="form-head" for="exampletext"> Name </label>
                                    <input type="text" class="form-control" id="exampleInputtext"
                                        placeholder="Enter your Name" required>
                                </div>
                            </div>
                            <!-- Repeat similar input fields for other information like DOB, SSN, and Relationship -->
                        </div>
                    </div>
                `;
            }

            // Show the dependent input sections
            $('#dependentSections').show();
        });
    });
    </script>
   
    