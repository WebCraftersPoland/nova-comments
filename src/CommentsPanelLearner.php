<?php

namespace KirschbaumDevelopment\NovaComments;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\MorphMany;
use KirschbaumDevelopment\NovaComments\Nova\CommentLearner;

class CommentsPanelLearner extends Panel
{
    /**
     * Create a new panel instance.
     */
    public function __construct()
    {
        parent::__construct('Comments', $this->prepareFields($this->fields()));
    }

    /**
     * Fields for the comment panel.
     *
     * @return array
     */
    protected function fields()
    {
        return [
            MorphMany::make(
                config('nova-comments.comments-panel.name'),
                'comments',
                CommentLearner::class
            ),
        ];
    }
}
