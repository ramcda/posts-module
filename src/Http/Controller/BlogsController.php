<?php namespace Anomaly\BlogsModule\Http\Controller;

use Anomaly\BlogsModule\Blog\Contract\BlogRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Illuminate\Http\Request;

/**
 * Class BlogsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BlogsModule\Http\Controller
 */
class BlogsController extends PublicController
{

    /**
     * Return an index of existing blog posts.
     *
     * @param BlogRepositoryInterface $blogs
     * @param Request                 $request
     * @return \Illuminate\View\View
     */
    public function index(BlogRepositoryInterface $blogs, Request $request)
    {
        $blog = $blogs->findBySlug($request->segment(1));

        return view('anomaly.module.blogs::blogs/index', compact('blog'));
    }
}