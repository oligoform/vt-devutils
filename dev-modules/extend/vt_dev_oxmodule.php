<?php

/**
 * vt dev utilities - modules
 * The MIT License (MIT)
 *
 * Copyright (C) 2016  Marat Bedoev
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * Version:    0.9
 * Author:     Marat Bedoev <oxid@marat.ws>
 */
class vt_dev_oxmodule extends vt_dev_oxmodule_parent
{
   /** TODO: pr�fen, warum ein Modul nicht geladen werden konnte. Pfad falsch, Berechntigung fehlt. etc */
    public function load($sModuleId)
    {
        $sModulePath = $this->getModuleFullPath($sModuleId);
       $sMetadataPath = $sModulePath . "/metadata.php";
       if(!$sModulePath)  die("lel");
       if(!file_exists($sMetadataPath))  die("lel");
       if(!is_readable($sMetadataPath)) die("lel");
          
          return parent::load($sModuleId);
       
    }

}