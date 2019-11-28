<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TorrentRepository")
 */
class Torrent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
    public function getId(): ?int { return $this->id; }

    /**
     * @var Movie
     * @ORM\ManyToOne(targetEntity="App\Entity\Movie", inversedBy="torrents")
     */
    protected $movie;
    public function getMovie(): Movie { return $this->movie; }
    public function setMovie(Movie $movie): self { $this->movie = $movie; return $this; }

    //<editor-fold desc="Movie Api Data">
    /**
     * @var string
     * @ORM\Column(type="string", length=3000)
     */
    protected $url;
    public function getUrl() { return $this->url; }
    public function setUrl($url) { $this->url = $url; return $this;}

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $language;
    public function getLanguage() { return $this->language; }
    public function setLanguage($language) { $this->language = $language; return $this;}

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $quality;
    public function getQuality() { return $this->quality; }
    public function setQuality($quality) { $this->quality = $quality; return $this;}

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $provider;
    public function getProvider() { return $this->provider; }
    public function setProvider($provider) { $this->provider = $provider; return $this;}

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $filesize;
    public function getFilesize() { return $this->filesize; }
    public function setFilesize($filesize) { $this->filesize = $filesize; return $this;}

    /**
     * @var integer
     * @ORM\Column(type="bigint")
     */
    protected $size;
    public function getSize() { return $this->size; }
    public function setSize($size) { $this->size = $size; return $this;}

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $peer;
    public function getPeer() { return $this->peer; }
    public function setPeer($peer) { $this->peer = $peer; return $this;}

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $seed;
    public function getSeed() { return $this->seed; }
    public function setSeed($seed) { $this->seed = $seed; return $this;}
    //</editor-fold>
}