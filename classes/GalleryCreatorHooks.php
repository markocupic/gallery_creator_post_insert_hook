
        <?php
        namespace MCupic\GalleryCreator;


        class GalleryCreatorHooks
        {

            /**
             * galleryCreatorImagePostInsert-Hook
             * Save camera-model from exif-image-data to tl_gallery_creator_pictures.cameraModel
             * Store Exif data in tl_gallery_creator_pictures
             * @param $id
             */
            public function postInsert($id)
            {
                $objPicture = \GalleryCreatorPicturesModel::findByPk($id);
                if ($objPicture !== null)
                {
                    $objFile = \FilesModel::findByUuid($objPicture->uuid);
                    if ($objFile !== null)
                    {
                        if (is_file(TL_ROOT . '/' . $objFile->path))
                        {
                            $arrExif = exif_read_data(TL_ROOT . '/' . $objFile->path);
                            // Save camera-model from exif-image-data to tl_gallery_creator_pictures.cameraModel
                            $objPicture->cameraModel = $arrExif["Model"];
                            $objPicture->save();
                        }
                    }
                }
            }
        }


