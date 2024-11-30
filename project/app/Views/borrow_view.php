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
                $baseurl = base_url('borrowing/' . urlencode($category));

                echo "<a href='$baseurl' class='btn btn-primary'>$category ($count)</a>";

            }
        ?>
    </div>
</div>