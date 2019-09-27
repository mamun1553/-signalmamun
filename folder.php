<?php 
    // NOTICE THAT THE FORM & THE PHP ARE ON THE SAME SCRIPT...
    // THIS IS NOT NECESSARY AT ALL YOU MAY SEPARATE THEM...
    // BUT IN THIS EXAMPLE, WE GO FOR SIMPLICITY.....

    $feedBack       = "";  //<== HOLDS MESSAGES THAT WE'D LIKE TO DISPLAY TO USER... 

    // CLEAN UP THE POSTED-VARIABLE (IF ANY)-..
    if( isset($_POST['create_folder']) ){ //<== IF FORM WAS SUBMITTED
        // WE CLEAN UP THE VALUE OF THE "folder_name"
        $folderName = htmlspecialchars(strip_tags(trim($_POST['folder_name'])));

         if($folderName){  //<== FOLDER NAME IS OK... ALL IS GOOD
            // WE WILL ASSUME YOU HAVE A SPECIAL, DEDICATED DIRECTORY INSIDE OF WHICH
            // YOU WILL CREATE ALL THE OTHER FOLDERS.... THIS FOLDER IS LOCATED AT:
            // __DIR__ . "/clients/folders"; SO WE STORE IT IN A VARIABLE:
            $rootFolder    = __DIR__ . "/clients/folders/";
            $folder2Create = $rootFolder . "/" . $folderName;

            $feedBack      = "A Similar Folder already exists. Choose another name."

            // NOW, WE CREATE THE FOLDER USING PHP'S mkdir().
            // BUT WE MAY NEED TO CHECK IF THE DIRECTORY EXISTS OR NOT
            // SO WE DON'T INADVERTENTLY OVERRIDE SOMETHING
            if(!is_dir($folder2Create){ //<== IF NO SUCH FOLDER EXISTS, WE CREATE IT.
                $folderCreated = mkdir($folder2Create, 0777);
                if($folderCreated){
                    $feedBack  = "Folder \"{$folderName}\" successfully created."
                }
            }
        }else{
            // FOLDER-NAME IS BAD SO WE GIVE FEED-BACK TO USER:
            $feedBack   = "The name Provided could could not be used in creating a Folder."
        }
    }

<html>
    <div class='col-md-12 message-box'>
        <!-- THIS CONTAINER IS FOR SIMPLE MESSAGE-FEEDBACK -->
        <?php echo $feedBack; ?>
    </div>
    <form name='folder_maker' class='folder_maker' action='' method='post'>
        <div class='form-group'>
            <div class='form-group'>
                <label for='folder_name'>Folder Name:</label>
                <input id='folder_name' class='form-control' 
                       name='folder_name'
                       value='' placeholder='Name of Folder to Create' />
            </div>
            <div class='form-group'>
                <input id='submit' class='form-control' 
                       name='create_folder'
                       value='Create Folder' />
            </div>
        </div>
    </form>
</html>