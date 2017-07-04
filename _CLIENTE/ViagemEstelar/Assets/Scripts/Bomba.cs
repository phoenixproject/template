using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Bomba : MonoBehaviour {

	private Rigidbody2D rb2d;

	[SerializeField]
	private float velocidade;

	// Use this for initialization
	void Start () {

		Movimentar();
	}
	
	void Movimentar()
	{
		rb2d = GetComponent<Rigidbody2D>();

		//transform.right tem que ser setado assim porque a coordenada do eixo do objeto foi alterado de forma global		
		rb2d.velocity = transform.right * velocidade;
	}

}
