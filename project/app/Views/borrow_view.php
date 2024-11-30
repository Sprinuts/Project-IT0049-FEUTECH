<div>
    <h3 class="text-center">List of Available Equipment</h3>
        <?php
        // foreach ($equipments as $equipment) {
        //     $count = $equipmentsmodel->getItemCountByCategory($equipment);
        //     echo "<button class='btn btn-primary'>$equipment ($count)</button> ";
        // }

        // $laptopcount = 0;
        // foreach ($equipments as $equipment) {
        //     $laptopcount += $equipment->category == 'laptop' ?  1 : 0;
        // }

        // echo "<button class='btn btn-primary'>Laptop ($laptopcount)</button> ";
        ?>
            <?php
            $categories = [];
            foreach ($equipments as $equipment) {
                if (!isset($categories[$equipment->category])) {
                    $categories[$equipment->category] = 0;
                }
                $categories[$equipment->category]++;
            }

            foreach ($categories as $category => $count) {
                $baseurl = base_url('borrowing/' . urlencode($category));

                echo "<a href='$baseurl' class='btn btn-primary'>$category ($count)</a>";

            }
            ?>
    </div>
</div>