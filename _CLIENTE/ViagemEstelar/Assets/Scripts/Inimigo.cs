using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Inimigo : MonoBehaviour {

	[SerializeField]
	private float velocidade;
	[SerializeField]
	private int vida;
	[SerializeField]
	private GameObject prefabExplosao1;
	[SerializeField]
	private GameObject prefabExplosao2;
	[SerializeField]
	private GameObject prefabBomba;
	[SerializeField]
	private GameObject prefabInstaciar;

	[SerializeField]
	private int minValor;
	[SerializeField]
	private int maxValor;
		
	private int valorInimigo;

	private Rigidbody2D rb2d;

	[SerializeField]
	private float atirarTempo;
	private float controle;

	// Use this for initialization
	void Start () {

		valorInimigo = Random.Range(minValor, maxValor);
		rb2d = GetComponent<Rigidbody2D>();
		rb2d.velocity = transform.up * velocidade;

	}
	
	// Update is called once per frame
	void Update () {
		
		if(Time.time > controle)
		{
			controle = Time.time + atirarTempo;
			Instantiate(prefabBomba, prefabInstaciar.transform.position, Quaternion.identity);
			GetComponent<AudioSource>().Play();
		}

	}

	void OnTriggerEnter2D(Collider2D outro)
	{
		if (outro.tag == "Bomba")
		{
			Instantiate(prefabExplosao1, transform.position, transform.rotation);
			Destroy(outro.gameObject);

			if (vida > 0)
			{
				vida--;
			}

			if (vida <= 0)
			{
				Instantiate(prefabExplosao2, transform.position, transform.rotation);
				Mensagens.pontos += valorInimigo;

				Destroy(gameObject);
			}
		}
	}
}
