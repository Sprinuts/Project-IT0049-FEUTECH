<div>
    <h3 class="text-center">List of Available Equipment</h3>
        <?php
        $categories = [
            'laptop', 'dlp', 'hdmi', 'vga', 'dlpremote', 'mac-keyboard-mouse', 
            'Wacom', 'speaker', 'webcam', 'extension-cord', 'cable-crimping-tool', 
            'cable-tester', 'lab-room-key'
        ];

        foreach ($categories as $category) {
            $count = $equipmentModel->getItemCountByCategory($category);
            echo "<button class='btn btn-primary'>$category ($count)</button> ";
        }
        ?>
    </div>
</div>