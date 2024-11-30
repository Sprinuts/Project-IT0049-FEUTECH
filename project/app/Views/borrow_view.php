<link rel="stylesheet" href="<?= base_url("public/style/borrowview_cs.css")?>">

<div>
    <h3 class="text-center">List of Available Equipment</h3>
        <?php
            $categories = [];
            foreach ($equipments as $equipment) {
                // Check if 'reserver' and 'borrower' are empty and if 'status' is 1
                if (empty($equipment->reserver) && empty($equipment->borrower) && $equipment->status == 1) {
                    // If the conditions are met, increment the count for the category
                    if (!isset($categories[$equipment->category])) {
                        $categories[$equipment->category] = 0;
                    }
                    $categories[$equipment->category]++;
                }
            }

            foreach ($categories as $category => $count) {
                // Replace dashes with spaces and capitalize each word
                $formattedCategory = ucwords(str_replace('-', ' ', $category));
        
                // Generate the URL
                $baseurl = base_url('borrowing/' . urlencode($category));
        
                // Output the button and the available text below it
                echo "<div class='category-button-container'>";
                echo "<a href='$baseurl' class='btn btn-primary'>$formattedCategory</a>";
                echo "<div class='category-available'>Available: $count</div>";
                echo "</div>";
            }
        ?>
    </div>
</div>