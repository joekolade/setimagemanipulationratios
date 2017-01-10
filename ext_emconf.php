<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'ratios for imageManipulation',
    'description' => 'Ratios for image manipulation in TYPO3 CMS Backend ',
    'category' => 'misc',
    'version' => '1.0.2',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Joekolade',
    'author_email' => 'joe@joekola.de',
    'author_company' => '',
    'constraints' => array(
        'depends' => array(
            'typo3/cms' => '7.6.0-8.9.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
