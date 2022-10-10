<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Halaman Home";
        $this->load->view('home', $data);
    }

    public function flexbox()
    {
        $data['title'] = "Halaman flexbox";
        $this->load->view('pageFlexbox/flexbox', $data);
    }

    public function layFlexbox()
    {
        $data['title'] = "Halaman layout flexbox";
        $this->load->view('pageFlexbox/layFlexbox', $data);
    }

    public function centerFlex()
    {
        $data['title'] = "Halaman Center flexbox";
        $this->load->view('pageFlexbox/centerFlex', $data);
    }

    public function marginFlex()
    {
        $data['title'] = "Halaman Margin flexbox";
        $this->load->view('pageFlexbox/marginFlex', $data);
    }

    public function propertiFlex()
    {
        $data['title'] = "Halaman Properti Flex";
        $this->load->view('pageFlexbox/propertiFlex', $data);
    }

    public function grid()
    {
        $data['title'] = "Halaman Grid";
        $this->load->view('pageGrid/grid', $data);
    }

    public function layoutGrid()
    {
        $data['title'] = "Halaman Layout";
        $this->load->view('pageGrid/layoutGrid', $data);
    }

    public function respon()
    {
        $data['title'] = "Halaman responsif";
        $this->load->view('pageFlexbox/responFlex', $data);
    }

    public function responGrid()
    {
        $data['title'] = "Halaman responsif";
        $this->load->view('pageGrid/responGrid', $data);
    }

    public function CSSGrid()
    {
        $data['title'] = "Halaman Css Grid";
        $this->load->view('pageGrid/cssGrid', $data);
    }

    public function gridColumn()
    {
        $data['title'] = "Halaman Css Grid";
        $this->load->view('pageGrid/gridColumn', $data);
    }

    public function gridRow()
    {
        $data['title'] = "Halaman Css Grid";
        $this->load->view('pageGrid/gridRow', $data);
    }
}
